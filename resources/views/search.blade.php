@extends('layouts.app')

@section('title')
   Weather App
@endsection

@section('content')

<div class="container">
    <div class="row">

      <div class="col-8 offset-2">
        <h2 class="text-center text-muted mt-5">
          Welcome to the Weather Forecast app. To find your city and 
          display the weather forecast, enter the city name in the search field and click 'Search' button.
        </h2>
      </div>

      

      <div class="col-6 offset-3 mt-3">
        <form action="{{ route('search') }}" method="POST">
          @csrf
          <div class="input-group mt-5 mb-5">
            <input type="text" name="cityName" class="form-control" placeholder="Enter the name of the city" required>
            <button type="submit" class="btn btn-primary">Search</button>
          </div>
        </form>
      </div>
    
            
        
        <div class="col-md-6 offset-md-3 mt-5">
            <div class="card" style="background: #ff9800; width: 23rem; margin: 5px auto;">
                <img src="<?php echo " http://openweathermap.org/img/wn/". $response['weather']['0']['icon'].".png"; ?>"
                style="width: 90px; margin: 5px auto" class="card-img-top">
                <div class="card-body text-center text-light">
                  <h5 class="card-title"><strong>{{ $response['name'] }}</strong></h5>
                  <p class="card-text">Temperature: <strong>{{ round($response['main']['temp']) }} &deg C </strong></p>
                  <p class="card-text">Weather:  <strong>{{ $response['weather']['0']['description'] }}</strong></p>                                     
                </div>
              </div>
        </div>
     

    </div>
</div>
   
@endsection