

      <div class="col-md-12 ">
        <div> 
           <img style="margin-bottom:20px; height:300px" width="300px" src="/images/{{$data->image}}">
        </div>
          <h4>{{$data->title}}</h4>
           <p>MK {{$data->price}}</p>
            <p>{{$data->location}}</p>

          <form  method="POST" action="{{url('reserveproperty/'.$data->id)}}">
          @csrf

            <button class="btn btn-primary">BOOK NOW</button>
          
          </form>

      </div>