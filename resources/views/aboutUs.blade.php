@extends('layouts.nav')
<!DOCTYPE html>
<html>
<head>
    <title>aboutUs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/Home.css">
</head>
<body>
@section('content')
    <section class="helping">
        <div class="container-fluid">
            <img src="{{asset('images/cars2.png ')}}" style=" opacity: 0.8; width: 100%; height: 100%; position: absolute;top: 0;right: 0;bottom: 0;left: 0;">
            <div class="row help">
                <div class="col-xs-12">
                    <article class="col-sm-8 col-sm-offset-2" style="text-align: center; margin-top: 4em">
                        <div class="well well-large">
                            <p>
                                About us
                               RAY for  GetTransfer provides transfer bookings and chauffeured car rentals at the best prices.

                                Ordering a transfer through our website is more affordable than calling a taxi or hiring a transportation company.

                                Would you like to rent a car? GetTransfer prices for chauffeured car rentals are lower than at other companies.

                                Compare and see the advantages.

                                Save on travel with GetTransfer!
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection('content')
</body>
</html>
