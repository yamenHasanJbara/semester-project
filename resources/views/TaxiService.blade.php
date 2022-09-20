@extends('layouts.nav')

<!DOCTYPE html>
<html>
<head>
	<title>TaxiService</title>
		  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="css/Home.css">
   <script type="text/javascript" src="js/Taxi.js"></script>
	
</head>
<body>
@section('content')
   
<div id="main">	


 <img src="{{asset('images/taxi cover.jpg')}} " style=" opacity: 0.8; width: 100%; height:1400px; position: absolute;top: 0;right: 0;bottom: 0;left: 0;">
  	<div class="container-fluid  ">
  	<div class="row"> 
   

  		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h2 style="color: gold; text-align: center; margin-top: 9%;">Make a reservation to taxi</h2>
        
        @if (session('error'))
<div class="alert alert-danger">
{{ session('error') }}
</div>
@endif
@if (session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif
        <form class="form-horizontal" role="form" method="POST" action="/taxilive">
          {{ csrf_field() }}
          <div class="form-group ">
            <label for="from" style="color: white;">
              From</label>
            <input type="text" name="from" class="form-control" id="from" required>
          </div>
         
    <div id="da" class="form-group datetime-input">
    <div class="input-group">
    <span class="input-group-addon"> Date</span>
    <input type="date" class="form-control" autocomplete="off"
      id="date"
      name="date"
      value=""
      placeholder="Date" >
    </div>

    <div class="input-group">
    <span class="input-group-addon">Time</span>
    <input type="time" class="form-control" autocomplete="off"
      id="time"
      name="time"
      value=""
      placeholder="Time" >
    
      </div>
     </div>
    <label for="duration" style="color: white;">duration</label>
    <select class="form-control" name="duration" required>
      <option>Default</option>
      <option>1 hours</option>
      <option>2 hours</option>
      <option>3 hours</option>
      <option>4 hours</option>
      <option>5 hours</option>
      <option>6 hours</option>
      <option>7 hours</option>
      <option>8 hours</option>
      <option>9 hours</option>
      <option>10 hours</option>
      <option>1 day</option>
    </select>
    <div class="form-group">
  <label for="comment" style="color: white;">Comment</label>
  <textarea id="comment" rows="5" class="form-control" name="comment" placeholder="please tell us if you want any special features"></textarea>
  </div>
  

            <div class="form-group">
            <select class="form-control" name="type" required onchange="show('da')">
                <option>Live</option>
                <option>Reservation</option>
            </select>
            </div>

            <div class="form-group">
    <label for="officeName" style="color: white;">OficeName</label>
    <input type="text" name="officeName" id="officeName" placeholder="please select tho office from the map" class="form-control" required>
  </div>

  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <button class="btn btn-warning btn btn-block" type="Submit">Submit</button>
  	
</form>
    

</div>
 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 Smap">
   
    <h3 style="text-align: center;color:gold; margin-top: 9%;">Our Google Maps</h3>
    
`
    <div id="map"></div>

     <script async defer
             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC52OSJjxl2c1ehXrcEIf_JFMWzIshnRGw&callback=initMap">

    </script>
    
    <button class="btn btn-warning btn-block" onclick="msg('select office from the map')"> TaxiLive </button>
    </div>
</div>
    </div>


</div>
@endsection('content')
</body>
</html>