<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <title>Ray For Get Transfer</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        .overlay {
            /* Height & width depends on how you want to reveal the overlay (see JS below) */
            height: 100%;
            width: 0;
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            background-color: rgb(0,0,0); /* Black fallback color */
            background-color: rgba(0,0,0, 0.9); /* Black w/opacity */
            overflow-x: hidden; /* Disable horizontal scroll */
            transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
        }

        /* Position the content inside the overlay */
        .overlay-content {
            position: relative;
            top: 25%; /* 25% from the top */
            width: 100%; /* 100% width */
            text-align: center; /* Centered text/links */
            margin-top: 30px; /* 30px top margin to avoid conflict with the close button on smaller screens */
        }

        /* The navigation links inside the overlay */
        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #818181;
            display: block; /* Display block instead of inline */
            transition: 0.3s; /* Transition effects on hover (color) */
        }

        /* When you mouse over the navigation links, change their color */
        .overlay a:hover, .overlay a:focus {
            color: #f1f1f1;
        }

        /* Position the close button (top right corner) */
        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }

        /* When the height of the screen is less than 450 pixels, change the font-size of the links and position the close button again, so they don't overlap */
        @media screen and (max-height: 450px) {
            .overlay a {font-size: 20px}
            .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
            }
        }













        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }


        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }


        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;

        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: gold;
            margin-top:50%;
            padding: 0 25px;
            font-size: 24px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-transform: uppercase;
            display: inline;



        }

        .m-b-md {
           margin-top: 8%;
            padding-right: 3%;
 
            position: absolute;

        }


        .bgimage{
            background-image: url('/images/welcom cover.jpg');
            height: 100%;
            background-position: center center;
        }

    </style>

</head>
<body>
<div id="myNav" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content">
        <a href="home">Home</a>
        <a href="aboutUs">About Us</a>
        <a href="contact">Contact</a>
        <a href="TaxiService">LiveTaxi</a>

    </div>

</div>
<script type="text/javascript">
    /* Open when someone clicks on the span element */
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    /* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
</script>



<div class="container-fluid bgimage">

    <div class="container content">

        <div class=" container title m-b-md">
            <a href="#">  <img class="img-circle"   src="{{asset('images/logo.jpg')}}"onclick="openNav()"  style="width: 200px; height: 200px;"></a></div>
          </div>
    </div>


</div>
</div>
</body>
</html>
