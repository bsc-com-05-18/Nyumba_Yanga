@extends('layouts.master')

@section('nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-6">
            <li class="breadcrumb-item text-sm"><a class="opacity-6 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Payment</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Payment</h6>
        </nav>
@endsection

@section('content')
<div class="container-fluid" style="min-height: 75vh; margin: 0; padding: 0;">
    <div class="content-wrapper">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h5 class="m-0 font-weight-bold text-center text-uppercase">make payments</h5>   
                    </div>
                  
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @elseif (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif
                  <form action="process-payment" method="post" id="payment-form">
                        @csrf
                        
                        <div class="form-group">
                           
                            
                            <!-- a Stripe Element will be inserted here. -->
                            <!-- <div id="card-element" class="form-control"></div>
                            <div id="card-errors" role="alert"></div> -->
                            <select class="form-select px-3  text-muted" id="card_type" name="card_type" aria-label="Default select example" required>
                            <option value="" selected>Choose Card Type</option>
                                <option value="visa">Visa</option>
                                <option value="mastercard">Mastercard</option>
                                <option value="amex">American Express</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success mt-5">Pay</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
               
@endsection

@section('scripts')
<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe('{{ config('services.stripe.key') }}');
    var elements = stripe.elements();
    var cardElement = elements.create('card');

    cardElement.mount('#card-element');

    var form = document.querySelector('form');
    var cardholderNameInput = document.getElementById('cardholder-name');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        form.querySelector('button').disabled = true;

        stripe.createToken(cardElement, {name: cardholderNameInput.value }).then(function(result) {
            if (result.error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;

                form.querySelector('button').disabled = false;

            }
            
        else {
            var tokenInput = document.createElement('input');
            tokenInput.setAttribute('type', 'hidden');
            tokenInput.setAttribute('name', 'stripe_token');
            tokenInput.setAttribute('value', result.token.id);
            form.appendChild(tokenInput);
            form.submit();
        }
     });
    });
 
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection