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
  <link rel="stylesheet" type="text/css" href="css/mgt.css">
  <script type="text/javascript" src="js/manegt.js"></script>
</head>
    <body style="background-color: darkgray;">
@section('content')


<img src="{{asset('images/manager.jpg')}}" style=" position: absolute; width: 1600px; height: 2000px; " >
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#" onclick="show('uorder')">Show Orders</a>
    <a href="#" onclick="show('ta')">Show Taxis</a>
    <a href="#" onclick="show('add')"> Taxi Request</a>
    <a href="#" onclick="show('office')">Suspend Taxi Request</a>
    <a href="#" onclick="show('avaBut')">Make Taxi Available</a>
</div>

<div id="main">

    <h2 style="color: gold">RAY Admin </h2>

    <button class="btn btn-warning btn-block" onclick="openNav()" style="position: absolute">Manage your Office</button>

    <br/>
    <br/>

    <!--order table-->
    <div class="container">
    <div class="row" id="uorder">
        <div class="col-lg-12 col-md-12 ">
            <div class="panel panel-default" style="margin-top: 10%;">
                <div class="panel-heading"> Orders </div>
                <div class="panel-body">
                    <div class="bs-example" data-example-id="panel-without-body-with-table">
                        <div class="panel panel-default">
                            <div class="panel-heading">Panel heading</div>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Id User</th>
                                    <th>OfficeName</th>
                                    <th>Customer Address</th>
                                    <th>reservation Type</th>
                                    <th>reservation Date</th>
                                    </tr>
                                    <tr>
                                    <th>reservation Time</th>
                                    <th>extraFeatures</th>
                                    <th>Duration</th>
                                    <th>Served</th>
                                    <th>IdTaxi</th>
                                    </tr>
    
                               
                                </thead>
                                
                                <tbody>
                               @foreach($order as $ord)
                                
                                    <tr class="op">
                                    <form  method="post" action="{{route('ServeOrd')}}">
                                         {{ csrf_field() }}
                                    <th scope="row"><input  type="text" name="ordt" value="{{$ord->idOrderTaxi}}"></th>
                                    <td><input  type="text" name="idUs" value="{{$ord->idUser}}"></td>
                                    <td ><input  type="text" name="OffNa" value="{{$ord->officeName}}"></td>
                                    <td><input  type="text" name="cusAdd" value="{{$ord->customerAddress}}"></td>
                                    <td ><input  type="text" name="resTy" value="{{$ord->reservationType}}"></td>
                                    <td ><input style="width: 50px;"  type="text" name="resDa" value="{{$ord->reservationDate}}"></td>
                                </tr>
                                <tr class="op" >
                                    <td><input  type="text" name="resTi" value="{{$ord->reservationTime}}"></td>
                                    <td><input  type="text" name="ExFea" value="{{$ord->extraFeatures}}"></td>
                                    <td><input  type="text" name="ser" value="{{$ord->duration}}"></td>
                                    <td>{{$ord->served}}</td>
                                    <td> <input  type="Number" name="idta" value="" required>
                                    </td>
                                    <td>
                                      
                                        <button class="btn btn-primary" type="submit" onclick="exit('op')" >Serve</button>
                                     </td>
                                    </form>
                                </tr>
                            
                                @endforeach
                               
                                </tbody>
                            
                                <tfoot>
                                    <td>
                                  <button type="submit" class="btn btn-danger" onclick="exitc('uorder')">
                                        Exit
                                    </button>
                                </td>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<!--order table-->
    <div class="container">
    <div class="row" id="sorder">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" style="margin-top: 10%;">
                <div class="panel-heading"> Served Orders </div>
                <div class="panel-body">
                    <div class="bs-example" data-example-id="panel-without-body-with-table">
                        <div class="panel panel-default">
                            <div class="panel-heading">Panel heading</div>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>IdTaxi</th>
                                    <th>OfficeName</td>
                                    <th>Customer Address</th>
                                    <th>Reservation Type</th>
                                    <th>Reservation Date</th>
                                    <th>Reservation Time</th>
                                    <th>Extra Features</th>
                                    <th>Duration</th>
                                    <th>Served</th>
                                    
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                               @foreach($servorder as $sord)
                                <tr>
                                    <th scope="row">{{$sord->idOrder}}</th>
                                    <td>{{$sord->idTaxi}}</td>
                                    <td>{{$sord->officeName}}</td>
                                    <td>{{$sord->customerAddress}}</td>
                                    <td>{{$sord->reservationType}}</td>
                                    <td>{{$sord->reservationDate}}</td>
                                    <td>{{$sord->reservationTime}}</td>
                                    <td>{{$sord->extraFeatures}}</td>
                                    <td>{{$sord->duration}}</td>
                                    <td>{{$sord->served}}</td>
                                    
                                </tr>
                                @endforeach
                                
                                </tbody>
                                <tfoot>
                                    <td>
                                  <button type="submit" class="btn btn-danger" onclick="exit('sorder')">
                                        Exit
                                    </button>
                                </td>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row" id="ta">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" style="margin-top: 5%;">
                <div class="panel-heading"> Taxis </div>
                <div class="panel-body">
                    <div class="bs-example" data-example-id="panel-without-body-with-table">
                        <div class="panel panel-default">
                            <div class="panel-heading">Panel heading</div>

                            <table class="table">
                                <thead>
                                <tr>
                                    
                                    <th>ID-taxi</th>
                                    <th>TheLanternNumber</th>
                                    <th>idOffice</th>
                                    <th>carNumber</th>
                                    <th>available</th>
                                
                                    <th>

                                    </th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                               @foreach($Taxi as $tax)
                                <tr>
                                    <th scope="row">{{$tax->idTaxi}}</th>
                                    <td>{{$tax->TheLanternNumber}}</td>
                                    <td>{{$tax->idOffice}}</td>
                                    <td>{{$tax->carNumber}}</td>
                                    <td>{{$tax->available}}</td>
                                    
                                    
                                    
                                </tr>
                                @endforeach    
                               
                                </tbody>
                                <tfoot>
                                    <td>
                                  <button type="submit" class="btn btn-danger" onclick="exit('ta')">
                                        Exit
                                    </button>
                                </td>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">
        <div id="add" class="row" >
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Taxis Requests</div>
                    <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{route('Requests')}}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="order-type" class="col-md-4 control-label">Order Type</label>

                                <div class="col-md-6">
                                    <input id="order-type" type="text" class="form-control" name="order-type" required autofocus>

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="The-lantern-number" class="col-md-4 control-label">The Lantern Number</label>

                                <div class="col-md-6">
                                    <input id="The-lantern-number" type="text" class="form-control" name="The-lantern-number" required autofocus>

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="car-number" class="col-md-4 control-label">Car Number</label>

                                <div class="col-md-6">
                                    <input id="car-number" type="text" class="form-control" name="car-number" required>

                                </div>
                            </div>

                            

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add
                                    </button>
                                    <button  class="btn btn-danger" onclick="exit('add')">
                                        Exit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--Make Taxi Available-->
    <div class="container">
        <div id="avaBut" class="row" >
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">available Taxi</div>
                    <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST"
                     action="{{route('MakeAvailable')}}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="idtaxi" class="col-md-4 control-label">Id Taxi</label>

                                <div class="col-md-6">
                                    <input id="idtaxi" type="text" class="form-control" name="idtaxi" required autofocus>

                                </div>
                            </div>

                           <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                       available
                                    </button>
                                    <button  class="btn btn-danger" onclick="exit('avaBut')">
                                        Exit
                                    </button>
                                </div>
                           </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Make Taxi Not Available-->
	

@endsection('content')
	</body>
</html>
