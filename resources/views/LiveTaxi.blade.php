<!DOCTYPE html>
<html>
<head>
	<title>TaxiService</title>
		  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <script type="text/javascript"></script>
   <link rel="stylesheet" type="text/css" href="css/Home.css">
	
</head>
<body>

   
<div id="main">	


 <img src="{{asset('images/cover.jpg ')}}" style="width: 100%; height: 100%; position: absolute;top: 0;right: 0;bottom: 0;left: 0;">
  	<div class="container-fluid ">
  	<div class="row"> 
   

  		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h2 > <mark  style="background-color: gold; text-align: center;">Call ATaxi</mark></h2>
        <form>
          <div class="form-group ">
            <label for="from" style="color: white;">
              From</label>
            <input type="text" name="from" class="form-control" id="from">
          </div>
        
    <div class="form-group">
  <label for="comment" style="color: white;">Comment</label>
  <textarea id="comment" rows="5" class="form-control" placeholder="please tell us if you want any special features"></textarea>
  </div>
  
   <div class="form-group">
    <label for="name" style="color: white;">Your Name</label>
    <input type="text" name="name" id="name" placeholder="Driver will meet you with a name sign" class="form-control">
  </div>
   <div class="form-group">
    <label for="phone" style="color: white;">Phone Number</label>
    <input type="text" name="phone" id="phone" placeholder="Enter phone Number" class="form-control">
  </div>
   
  <button class="btn btn-warning btn btn-block">Submit</button>
  <br/>
</br>
  	
</form>
    

</div>
 <div class="col-lg-push-1 col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
    <h3 style="text-align: center; margin-right: 16%; margin-top: 8%">Our Google Maps</h3>
    <div id="map">
    
    </div>

    <script>
      function initMap() {
        var uluru = {lat: 35.543224524478357, lng:35.795742341459798};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC52OSJjxl2c1ehXrcEIf_JFMWzIshnRGw&callback=initMap">
    </script>
    </div>
</div>
 

</div>
</div>
</body>
</html>