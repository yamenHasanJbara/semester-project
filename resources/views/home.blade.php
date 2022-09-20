@extends('layouts.nav')
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="{{ asset ('css/Home.css') }}">
</head>
<body>
@section('content')
	<!--cover photo-->
	<header class="bgimage">
		<div class="container-fluid cover">
		</div>
	</header>

	<!-- pictures of our cars-->

<div class="container item">
	<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
     			 <div class="rounded myimg">
       				 <a href="{{route('TaxiService')}}">
       				   <img src=" {{asset('images/123.jpg')}}" alt="Lights" >
      					 </a>
       				 <h3 style="padding-left: 10%">Taxi Service</h3>
     			 </div>
  			  </div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      		<div class="rounded myimg">
        		<a href="{{route('Rental')}}" >
        		  <img src=" {{asset('images/taxi.jpg')}}" alt="Lights" >
      			  </a>
          			  <h3 style="padding-left: 11%">Book a Car</h3>
     		 </div>
   		 </div>
</div>
</div>

<div class="container-fluid area">
	<div class="row">

	<div class="col-lg-3 col-md-3 col-sm-6">
	<h4>SERVICES</h4>
	<th><a style="color: black;" href="TaxiService">Taxi Service</a></th><br/>
	<th><a style="color: black;" href="Rental">Rental Car </a></th><br/>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-6 ">
		<h4>Our Work</h4>
	<th><a href="aboutUs" style="color: black;">About Us</a></th><br/>
	<th><a href="#" style="color: black;">Why Us</a></th><br/>
	<th><a href="#" data-toggle="modal" data-target="#myregister" style="color: black;">Sign Up</a></th><br/>
	<th><a href="#" data-toggle="modal" data-target="#mylogin" style="color: black;">Log in</a></th><br/>
	<th><a href="contact" style="color: black;">Contact With Us</a></th><br/>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-6">
	<h4>Contacts</h4>
	<th><a style="color: black;">E-mail: RayT@hotmail.com </a> </th><br/>
	<th><a style="color: black;">Adress: Syria/latakia/al zer3a street </a> </th><br/>
	<th><a style="color: black;">Mobile: 0933736641 </a> </th><br/>
	<th><a style="color: black;">Facebook: Ray.transfer@hotmail.com </a> </th><br/>
	</div>

	<div class="col-lg-3 col-lg-push-1 col-md-3 col-sm-6 col-sm-push-3 ">
	<h4><img class="img-circle"   src=" {{asset('images/logo.jpg')}}" style="width: 110px; height: 110px; "></h4>
	</div>

</div>
</div>

@endsection('content')
</body>
</html>