@extends('layouts.nav')
<title>Admin</title>
@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('js/admin.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
</head>
<body>
<img src="{{ asset('images/car-rental.jpg') }}" style="width: 1600px;height:1200px;" alt="blbl">
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#" onclick="show('User')">Show Users Data</a>
    <a href="#" onclick="show('update')">ascociation</a>
    <a href="#" onclick="show('delUs')">Delete User</a>
    <a href="#" onclick="show('office')">Show OfficeTaxis Data</a>
    <a href="#" onclick="show('add')">Add Office Taxi</a>
    <a href="#" onclick="show('del')">Delete Office Taxi</a>
    <a href="#" onclick="show('edi')">Edit Office Taxi</a>    
    <a href="#" onclick="show('Taxi')">Show taxis Data</a>
    <a href="#" onclick="show('addtax')">AddTaxis</a>
    <a href="#" onclick="show('OfficeCar')">Show OfficeCar Data</a>
    <a href="#" onclick="show('addc')">Add OfficeCar</a>
    <a href="#" onclick="show('editOffCar')">Edit OfficeCar</a>
    <a href="#" onclick="show('deleteOffCar')">Delete OfficeCar</a>
    <a href="#" onclick="show('driver')">ShowDrivers</a>
    <a href="#" onclick="show('addDrivers')">Add Drivers</a>
    <a href="#" onclick="show('deleteDriver')">Delete Drivers</a>
</div>

<div id="main">

    <h2 style="color: gold">RAY Admin </h2>

    <button class="btn btn-warning btn-block" onclick="openNav()" style="position: absolute">Manage your website</button>

    <br/>
    <br/>

        
    <!--Office table-->
    <div class="container">
    <div class="row" id="office">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" style="margin-top: 10%;">
                <div class="panel-heading">Office DataBase</div>
                <div class="panel-body">
                    <div class="bs-example" data-example-id="panel-without-body-with-table">
                        <div class="panel panel-default">
                            <div class="panel-heading">Panel heading</div>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Owner</th>
                                    <th>Lat</th>
                                    <th>Lng</th>
                                    <th>Phone</th>
                                    <th>Contract</th>
                                    <th>Number Of Cars</th>
                                    <th>Available</th>
                                </tr>
                                </thead>
                                <tbody>
                               @foreach($officeT as $myoff)
                                <tr>
                                    <th scope="row">{{$myoff->id}}</th>
                                    <td>{{$myoff->name}}</td>
                                    <td>{{$myoff->owner}}</td>
                                    <td>{{$myoff->lat}}</td>
                                    <td>{{$myoff->lng}}</td>
                                    <td>{{$myoff->phone}}</td>
                                    <td>{{$myoff->contract}}</td>
                                    <td>{{$myoff->carsnumber}}</td>
                                    <td>{{$myoff->available}}</td>
                                    
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <td>
                                  <button type="submit" class="btn btn-danger" onclick="exit('office')">
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



<!--user table-->
<div class="container">
    <div class="row" id="User">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" style="margin-top: 10%;">
                <div class="panel-heading">Users DataBase</div>
                <div class="panel-body">
                    <div class="bs-example" data-example-id="panel-without-body-with-table">
                        <div class="panel panel-default">
                            <div class="panel-heading">Panel heading</div>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>Id Office</th>
                                    <th>email</th>
                                    <th>MobileNumber</th>
                                    <th>gender</th>
                                    <th>Role</th>
                                </tr>
                                </thead>
                                <tbody>
                               @foreach($User as $use)
                                <tr>
                                    <th scope="row">{{$use->id}}</th>
                                    <td>{{$use->FirstName}}</td>
                                    <td>{{$use->LastName}}</td>
                                    <td>{{$use->idOffice}}</td>
                                    <td>{{$use->email}}</td>
                                    <td>{{$use->MobileNumber}}</td>
                                    <td>{{$use->gender}}</td>
                                    <td>
                                    <div class="form-group">
                                        <form method="post" action="{{route('UpdateRole',$use->id)}}">
                                            {{ csrf_field() }}
                                <select class="form-control" name="role" onchange="this.form.submit();">
                                    <option name="Admin" value="1"  {{ ($use->role ==1)? 'selected' : null }} >Admin</option>
                                    <option name="OfMangT" value="2" {{ ($use->role ==2)? 'selected' : null }} >Office Maneger Taxis</option>
                                    <option name="OffManC" value="4" {{ ($use->role ==4)? 'selected' : null }} >Office Manager Rental</option>
                                    <option name="User" value="3" {{ ($use->role ==3)? 'selected' : null }} >User</option>
                                </select>  
                                        </form>
                                        
                                    </div>
                                </td>
                                    
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <td>
                                  <button type="submit" class="btn btn-danger" onclick="exit('User')">
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


<!-- show office car-->
<div class="container">
    <div class="row" id="OfficeCar">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" style="margin-top: 10%;">
                <div class="panel-heading">OfficeCar DataBase</div>
                <div class="panel-body">
                    <div class="bs-example" data-example-id="panel-without-body-with-table">
                        <div class="panel panel-default">
                            <div class="panel-heading">OfficeCar DataBase</div>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Owner</th>
                                    <th>Lat</th>
                                    <th>Lng</th>
                                    <th>Phone</th>
                                    <th>Contract</th>
                                    <th>Number Of Cars</th>
                                    <th>Available</th>
                                </tr>
                                </thead>
                                <tbody>
                               @foreach($OfficeC as $offcar)
                                <tr>
                                    <th scope="row">{{$offcar->id}}</th>
                                    <td>{{$offcar->name}}</td>
                                    <td>{{$offcar->owner}}</td>
                                    <td>{{$offcar->lat}}</td>
                                    <td>{{$offcar->lng}}</td>
                                    <td>{{$offcar->phone}}</td>
                                    <td>{{$offcar->contract}}</td>
                                    <td>{{$offcar->carsnumber}}</td>
                                    <td>{{$offcar->available}}</td>
                                    
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <td>
                                  <button type="submit" class="btn btn-danger" onclick="exit('OfficeCar')">
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
<!--end show office car-->


<!--Cars table-->
<div class="container">
    <div class="row" id="Taxi">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" style="margin-top: 10%;">
                <div class="panel-heading">Taxis DataBase</div>
                <div class="panel-body">
                    <div class="bs-example" data-example-id="panel-without-body-with-table">
                        <div class="panel panel-default">
                            <div class="panel-heading">Panel heading</div>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>The Lantern Number</th>
                                    <th>Id Office</th>
                                    <th>Car Number</th>
                                    <th>Available</th>
                                </tr>
                                </thead>
                                <tbody>
                               @foreach($Taxi as $ta)
                                <tr>
                                    <th scope="row">{{$ta->idTaxi}}</th>
                                    <td>{{$ta->TheLanterNumber}}</td>
                                    <td>{{$ta->idOffice}}</td>
                                    <td>{{$ta->carNumber}}</td>
                                    <td>{{$ta->available}}</td>
                                    
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <td>
                                  <button type="submit" class="btn btn-danger" onclick="exit('Taxi')">
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


<!-- show drivers -->
     <div class="container">
    <div class="row" id="driver">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" style="margin-top: 10%;">
                <div class="panel-heading">Driver DataBase</div>
                <div class="panel-body">
                    <div class="bs-example" data-example-id="panel-without-body-with-table">
                        <div class="panel panel-default">
                            <div class="panel-heading">OfficeTaxis DataBase</div>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>firstName</th>
                                    <th>lastName</th>
                                    <th>Current Address</th>
                                    <th>phoneNumber</th>
                                    <th>nationalNumber</th>
                                    <th>date_of_birth</th>
                                    
                                    <th>Available</th>
                                </tr>
                                </thead>
                                <tbody>
                               @foreach($driver as $driv)
                                <tr>
                                    <th scope="row">{{$driv->id}}</th>
                                    <td>{{$driv->firstName}}</td>
                                    <td>{{$driv->lastName}}</td>
                                    <td>{{$driv->CurrentResidenceAddress}}</td>
                                    <td>{{$driv->phoneNumber}}</td>
                                    <td>{{$driv->nationalNumber}}</td>
                                    <td>{{$driv->date_of_birth}}</td>
                                    
                                    <td>{{$driv->available}}</td>
                                    
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <td>
                                  <button  class="btn btn-danger" onclick="exit('driver')">
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

<!--end show driver-->


<div class="container">
    <div class="row" id="mng">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default" style="margin-top: 10%;">
                <div class="panel-heading">managers request</div>
                <div class="panel-body">
                    <div class="bs-example" data-example-id="panel-without-body-with-table">
                        <div class="panel panel-default">
                            <div class="panel-heading">Panel heading</div>

                            <table class="table">
                                <thead>
                                <tr>
                                    
                                    <th>idToffice</th>
                                    <th>OrderType</th>
                                    <th>The Lantern Number</th>
                                    <th>Car Number</th>
                                    <th>Served</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                               @foreach($Mangerorder as $re)
                                <tr>
                                    <th scope="row">{{$re->idToffice}}</th>
                                    
                                    <td>{{$re->orderType}}</td>
                                    <td>{{$re->TheLanternNumber}}</td>
                                    <td>{{$re->carNumber}}</td>
                                    <td>{{$re->served}}</td>
                                    <th><button id="bt" class="btn btn-warning " onclick="exit('bt') " style="display: block;">serve</button>

                                    </th>
                                    
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <td>
                                  <button type="submit" class="btn btn-danger" onclick="exit('mng')">
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
        <div id="delUs" class="row" >
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">DeleteOfficeCar</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{route('DeleteUser')}}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="idu" class="col-md-4 control-label">Id User</label>

                                <div class="col-md-6">
                                    <input id="idu" type="number" class="form-control" name="idu" required autofocus>

                                </div>
                            </div>


                                <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        @@@Delete@@
                                    </button>
                                </div>
                            </div>
                        </form>
                         <button  class="btn btn-danger" onclick="exit('delUs')">
                            Exit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="container">
        <div id="update" class="row" >
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Associate driver with office</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{route('AssociateDriverWithOffice')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="idu" class="col-md-4 control-label">Id User</label>
                                <div class="col-md-6">
                                    <input id="idu" type="number" class="form-control" name="idu" required autofocus>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="idOffice" class="col-md-4 control-label">idOffice</label>
                                <div class="col-md-6">
                                    <input id="idOffice" type="text" class="form-control" name="idOffice" required autofocus>
                                </div>
                            </div>
                                <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        @@@association@@
                                    </button>
                                    <button  class="btn btn-danger" onclick="exit('update')">
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




   <div class="container">
        <div id="add" class="row" >
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">AddOfficeTaxis</div>
                    <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{route ('admin_add')}}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" required autofocus>

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="owner" class="col-md-4 control-label">Owner</label>

                                <div class="col-md-6">
                                    <input id="owner" type="text" class="form-control" name="owner" required autofocus>

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="lat" class="col-md-4 control-label">Lat</label>

                                <div class="col-md-6">
                                    <input id="lat" type="float" class="form-control" name="lat" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lng" class="col-md-4 control-label">Lng</label>

                                <div class="col-md-6">
                                    <input id="lng" type="float" class="form-control" name="lng" required>

                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label for="phone" class="col-md-4 control-label">Phone</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control" name="phone" required>

                                </div>
                            </div>



                            <div class="form-group">
                                <label for="contract" class="col-md-4 control-label">Contract</label>

                                <div class="col-md-6">
                                    <input id="contract" type="text" class="form-control" name="contract" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cars" class="col-md-4 control-label">Number Of Cars</label>

                                <div class="col-md-6">
                                    <input id="cars" type="number" class="form-control" name="cars" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        @@@Add@@
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

    <div class="container">
        <div id="del" class="row" >
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">DeleteOfficeTaxis</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{route('DelTaxiOff')}}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="id" class="col-md-4 control-label">Id Office</label>

                                <div class="col-md-6">
                                    <input id="id" type="number" class="form-control" name="id" required autofocus>

                                </div>
                            </div>

                             <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" required autofocus>

                                </div>
                            </div>

                                <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        @@@Delete@@
                                    </button>
                                    <button  class="btn btn-danger" onclick="exit('del')">
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



    <div class="container">
        <div id="edi" class="row" >
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit OfficeTaxis</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{route('EditOfficeTaxis')}}" >
                            {{ csrf_field() }}


                            <div class="form-group">
                                <label for="id" class="col-md-4 control-label">ID</label>

                                <div class="col-md-6">
                                    <input id="id" type="text" class="form-control" name="id" value="" required autofocus>

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="" required autofocus>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="owner" class="col-md-4 control-label">Owner</label>

                                <div class="col-md-6">
                                    <input id="owner" type="text" class="form-control" name="owner" value="" required autofocus>

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="lat" class="col-md-4 control-label">Lat</label>

                                <div class="col-md-6">
                                    <input id="lat" type="float" class="form-control" name="lat" value="" required >

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lng" class="col-md-4 control-label">Lng</label>

                                <div class="col-md-6">
                                    <input id="lng" type="float" class="form-control" name="lng" value="" required >

                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label for="phone" class="col-md-4 control-label">Phone</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control" name="phone" value="" required >

                                </div>
                            </div>



                            <div class="form-group">
                                <label for="contract" class="col-md-4 control-label">Contract</label>

                                <div class="col-md-6">
                                    <input id="contract" type="text" class="form-control" name="contract" value="" required >

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cars" class="col-md-4 control-label">Number Of Cars</label>

                                <div class="col-md-6">
                                    <input id="cars" type="number" class="form-control" name="cars" value="" required >

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        @@Edit@@
                                    </button>
                                    <button  class="btn btn-danger" onclick="exit('edi')">
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




<!-- to Add OfficeCar-->

 <div class="container">
        <div id="addc" class="row" >
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">AddOfficeCar</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{route('AddOfficeCar')}}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" required autofocus>

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="owner" class="col-md-4 control-label">Owner</label>

                                <div class="col-md-6">
                                    <input id="owner" type="text" class="form-control" name="owner" required autofocus>

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="lat" class="col-md-4 control-label">Lat</label>

                                <div class="col-md-6">
                                    <input id="lat" type="float" class="form-control" name="lat" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lng" class="col-md-4 control-label">Lng</label>

                                <div class="col-md-6">
                                    <input id="lng" type="float" class="form-control" name="lng" required>

                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label for="phone" class="col-md-4 control-label">Phone</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control" name="phone" required>

                                </div>
                            </div>



                            <div class="form-group">
                                <label for="contract" class="col-md-4 control-label">Contract</label>

                                <div class="col-md-6">
                                    <input id="contract" type="text" class="form-control" name="contract" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cars" class="col-md-4 control-label">Number Of Cars</label>

                                <div class="col-md-6">
                                    <input id="cars" type="number" class="form-control" name="cars" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        @@@Add@@
                                    </button>
                                    <button  class="btn btn-danger" onclick="exit('addc')">
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


<!-- end of Add OfficeCar-->



<!--Edit OfficeCar-->
<div class="container">
        <div id="editOffCar" class="row" >
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit OfficeCar</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{route('EditOfficeCar')}}" >
                            {{ csrf_field() }}


                            <div class="form-group">
                                <label for="id" class="col-md-4 control-label">ID</label>

                                <div class="col-md-6">
                                    <input id="id" type="text" class="form-control" name="id" value="" required autofocus>

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="" required autofocus>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="owner" class="col-md-4 control-label">Owner</label>

                                <div class="col-md-6">
                                    <input id="owner" type="text" class="form-control" name="owner" value="" required autofocus>

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="lat" class="col-md-4 control-label">Lat</label>

                                <div class="col-md-6">
                                    <input id="lat" type="float" class="form-control" name="lat" value="" required >

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lng" class="col-md-4 control-label">Lng</label>

                                <div class="col-md-6">
                                    <input id="lng" type="float" class="form-control" name="lng" value="" required >

                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label for="phone" class="col-md-4 control-label">Phone</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control" name="phone" value="" required >

                                </div>
                            </div>



                            <div class="form-group">
                                <label for="contract" class="col-md-4 control-label">Contract</label>

                                <div class="col-md-6">
                                    <input id="contract" type="text" class="form-control" name="contract" value="" required >

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cars" class="col-md-4 control-label">Number Of Cars</label>

                                <div class="col-md-6">
                                    <input id="cars" type="number" class="form-control" name="cars" value="" required >

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        @@Edit@@
                                    </button>
                                    <button class="btn btn-danger" onclick="exit('editOffCar')">
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
<!--end of Edit OfficeCar-->


<!--Delete OfficeCar-->
<div class="container">
        <div id="deleteOffCar" class="row" >
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">DeleteOfficeCar</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{route('DeleteOfficeCar')}}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="id" class="col-md-4 control-label">Id Office</label>

                                <div class="col-md-6">
                                    <input id="id" type="number" class="form-control" name="id" required autofocus>

                                </div>
                            </div>

                             <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" required autofocus>

                                </div>
                            </div>

                                <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        @@@Delete@@
                                    </button>
                                    <button  class="btn btn-danger" onclick="exit('deleteOffCar')">
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

    <!-- end delete officeCar-->




    <!-- Add Drivers-->
     <div class="container">
        <div id="addDrivers" class="row" >
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Drivers</div>
                    <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{route('AddDrivers')}}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="firstName" class="col-md-4 control-label">firstName</label>

                                <div class="col-md-6">
                                    <input id="firstName" type="text" class="form-control" name="firstName" required autofocus>

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="lastName" class="col-md-4 control-label">lastName</label>

                                <div class="col-md-6">
                                    <input id="lastName" type="text" class="form-control" name="lastName" required autofocus>

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="CurrentResidenceAddress" class="col-md-4 control-label">CurrentResidenceAddress</label>

                                <div class="col-md-6">
                                    <input id="CurrentResidenceAddress" type="text" class="form-control" name="CurrentResidenceAddress" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phoneNumber" class="col-md-4 control-label">phoneNumber</label>

                                <div class="col-md-6">
                                    <input id="phoneNumber" type="text" class="form-control" name="phoneNumber" required>

                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label for="nationalNumber" class="col-md-4 control-label">nationalNumber</label>

                                <div class="col-md-6">
                                    <input id="nationalNumber" type="text" class="form-control" name="nationalNumber" required>

                                </div>
                            </div>



                            <div class="form-group">
                                <label for="date_of_birth" class="col-md-4 control-label">date_of_birth</label>

                                <div class="col-md-6">
                                    <input id="date_of_birth" type="date" class="form-control" name="date_of_birth" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        @@@Add@@
                                    </button>
                                    <button  class="btn btn-danger" onclick="exit('addDrivers')">
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
    <!--End add drivers-->

    


<!--delete Drivers -->
<div class="container">
        <div id="deleteDriver" class="row" >
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">deleteDriver</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{route('DeleteDriver')}}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="id" class="col-md-4 control-label">Id</label>

                                <div class="col-md-6">
                                    <input id="id" type="number" class="form-control" name="id" required autofocus>

                                </div>
                            </div>

                             <div class="form-group">
                                <label for="firstName" class="col-md-4 control-label">firstName</label>

                                <div class="col-md-6">
                                    <input id="firstName" type="text" class="form-control" name="firstName" required autofocus>

                                </div>
                            </div>

                                <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        @@@Delete@@
                                    </button>
                                    <button  class="btn btn-danger" onclick="exit('deleteDriver')">
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
<!--End of delete drivers-->

 <!-- Add Taxis-->
     <div class="container">
        <div id="addtax" class="row" >
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Taxis</div>
                    <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{route('add-tax')}}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="The-lantern-number" class="col-md-4 control-label">The-lantern-number</label>

                                <div class="col-md-6">
                                    <input id="The-lantern-number" type="text" class="form-control" name="The-lantern-number" required autofocus>

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="car-number" class="col-md-4 control-label">TheCarNumber</label>

                                <div class="col-md-6">
                                    <input id="car-number" type="text" class="form-control" name="car-number" required autofocus>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="IdOffice" class="col-md-4 control-label">IdOffice</label>

                                <div class="col-md-6">
                                    <input id="IdOffice" type="text" class="form-control" name="IdOffice" required autofocus>

                                </div>
                            </div>


                         


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        @@@Add@@
                                    </button>
                                    <button  class="btn btn-danger" onclick="exit('addtax')">
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
    <!--End add Taxis-->

@endsection
</body>
</html>
