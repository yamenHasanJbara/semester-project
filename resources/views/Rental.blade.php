@extends('layouts.nav')
<!DOCTYPE html>
<html>
<head>
  <title>Rental Cars</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/rental.js"></script>
   <link rel="stylesheet" type="text/css" href="css/Rental.css">

</head>
<body>
@section('content')
 <div id="main">



	<div class="container-fluid">
		<div class="row">
      <img src="{{asset('images/rental cover.jpg')}}" style=" opacity: 0.8; width: 100%; height: 100%; position: absolute;">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h2 style="color: yellow; text-align: center; margin-top: 8%;">Make a Reservation For Car </h2>
        <form>
			    <div class="from-group">
          <label for="Adress">Adress</label>
          <input type="text" name="Adress" id="Adress" class="form-control" placeholder="your current Adress" required>
          </div>

          <div id="da" class="form-group datetime-input">
    <div class="input-group">
    <span class="input-group-addon"> Date</span>
    <input type="date" class="form-control" autocomplete="off"
      id="date"
      name="transfer[trip_to][date]"
      value=""
      placeholder="Date" required>
    </div>

    <div class="input-group">
    <span class="input-group-addon">Time</span>
    <input type="time" class="form-control" autocomplete="off"
      id="time"
      name="transfer[trip_to][time]"
      value=""
      placeholder="Time" required>
    
      </div>
     </div>

						<div class="from-group">
					<label for="DOB">Birthday</label>
					<input type="Date" name="DOB" id="DOB" class="form-control" placeholder="Date Of Birth">
					</div>
             
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
          

					<div class="from-group">
					<label for="Social Security Number">Social Security Number</label>
					<input type="text" name="Social Security Number" id="Social Security Number" class="form-control" placeholder="Your Social Security Number">
					</div>

					<label for="note">Insurance</label>
					<p id="note"><h3 style="color: yellow;"> You will pay insurance when you pick up the car</h3></p>
					  <label for="duration">duration</label>
   						 <select class="form-control" name="duration">
     						 <option>1 day</option>
     						 <option>2 day</option>
     						 <option>3 day</option>
     						 <option>4 day</option>
     						 <option>5 day</option>
     						 <option>6 day</option>
     						 <option>7 day</option>
     						 <option>8 day</option>
     						 <option>9 day</option>
     						 <option>10 day</option>
     						 <option>11 day</option>
     						 <option>12 day</option>
     						 <option>13 day</option>
     						 <option>14 day</option>
     						 <option>15 day</option>
    						</select>
    						 <label for="car">Cars Type</label>
   						 <select class="form-control" name="car">
     						 <option>kia</option>
     						 <option>volk</option>
     						 <option>malibo</option>
     						 <option>optima</option>
     						 <option>trax</option>
    						</select>
    				 <div class="form-group">
  					  <label for="comment" style="color: white;">Comment</label>
              <textarea id="comment" rows="5" class="form-control" placeholder="please tell us if you want any special features"></textarea>
             </div>


              <button class="btn btn-warning btn btn-block" type="Submit">Submit</button>
				</form>
			</div> 


			 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <h3 style="text-align: center; color: yellow; padding-left: 1%; margin-top: 8%;">Our Google Maps</h3>
    <div id="map"></div>

      <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC52OSJjxl2c1ehXrcEIf_JFMWzIshnRGw&callback=initMap">
      </script>
    </div>
	</div>
</div>
<img src="{{asset('images/rental cover2.jpg')}}" style=" opacity: 0.8; width: 100%; height: 100%; position: absolute;">
<div class="container carmain">

  <div class="car">
  <h2 style="text-align:center; color: yellow;">Our Fleet</h2>
  <div class="mySlides" >
    <div class="numbertext"></div>
    <img src="{{asset('images/rental cover2.jpg')}}" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="{{asset('images/chevrolet cruze.png')}}" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="{{asset('images/bmw3.png')}}" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="{{asset('images/honda acord.png')}}" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="images/mazda3.png" style="width:100%">
  </div>

    <div class="mySlides">
    <div class="numbertext"></div>
    <img src="{{asset('images/mercedes.png')}}" style="width:100%">
  </div>

</div>
    


  <div class="row" style="position: absolute;">
    <div class="column">
      <img class="demo cursor" src="{{asset('images/bmw4.png')}}" style="width:100%" onclick="currentSlide(1)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="{{asset('images/chevrolet cruze.png')}}" style="width:100%" onclick="currentSlide(2)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="{{asset('images/bmw3.png')}}" style="width:100%" onclick="currentSlide(3)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="{{asset('images/honda acord.png')}}" style="width:100%" onclick="currentSlide(4)" >
    </div>    
    <div class="column">
      <img class="demo cursor" src="{{asset('images/mazda3.png')}}" style="width:100%" onclick="currentSlide(5)">
    </div>

    <div class="column">
      <img class="demo cursor" src="{{asset('images/mercedes.png')}}" style="width:100%" onclick="currentSlide(6)">
    </div>
  </div>
</div>
</div>
@endsection('content')
</body>
</html>
