<form action="{{ url ('processPayment') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="cardholder_name" placeholder="Cardholder Name" required>
    <input type="text" name="card_number" placeholder="Card Number" required>
    <input type="text" name="expiration_date" placeholder="Expiration Date" required>
    <input type="text" name="cvv" placeholder="CVV" required>
    <input type="text" name="billing_address" placeholder="Billing Address" required>
    <input type="hidden" name="house_id" value="{{ $houseId }}">
    <input type="hidden" name="amount" value="{{ $amount }}">
    <button type="submit">Pay Now</button>
</form>
