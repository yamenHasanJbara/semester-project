@extends('layouts.app')
<title>Account</title>
@section('content')
<img src="images/login.jpg" style=" opacity: 0.8; width: 100%; height: 100%; position: absolute;top: 0;right: 0;bottom: 0;left: 0;">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default" style=" opacity: 0.8">
<div class="panel-heading">Change password</div>
<div class="panel-body">
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
<form class="form-horizontal" method="POST" action="{{ route('Editaccount') }}">
{{ csrf_field() }}
<div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
<label for="FirstName" class="col-md-4 control-label">First Name</label>
<div class="col-md-6">
<input id="FirstName" type="text" class="form-control" name="FirstName" value="{{Auth::User()->FirstName}}" required>
@if ($errors->has('FirstName'))
<span class="help-block">
<strong>{{ $errors->first('FirstName') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
<label for="LastName" class="col-md-4 control-label">Last Name</label>
<div class="col-md-6">
<input id="LastName" type="text" class="form-control" name="LastName" value="{{Auth::User()->LastName}}" required>
@if ($errors->has('LastName'))
<span class="help-block">
<strong>{{ $errors->first('LastName') }}</strong>
</span>
@endif
</div>
</div>

@if(Auth::User()->role == 2)
<div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
<label for="IdOffice" class="col-md-4 control-label">Your IdOffice</label>
<div class="col-md-6">
<input id="IdOffice" type="text" class="form-control" name="IdOffice" value="{{Auth::User()->IdOffice}}" required>
@if ($errors->has('IdOffice'))
<span class="help-block">
<strong>{{ $errors->first('IdOffice') }}</strong>
</span>
@endif
</div>
</div>
@endif

<div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
<label for="MobileNumber" class="col-md-4 control-label">Mobile Number</label>
<div class="col-md-6">
<input id="MobileNumber" type="text" class="form-control" name="MobileNumber" value="{{Auth::User()->MobileNumber}}" required>
@if ($errors->has('MobileNumber'))
<span class="help-block">
<strong>{{ $errors->first('MobileNumber') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
<label for="gender" class="col-md-4 control-label">Gender</label>
<div class="col-md-6">
<input id="gender" type="text" class="form-control" name="gender" value="{{Auth::User()->gender}}" required>
@if ($errors->has('gender'))
<span class="help-block">
<strong>{{ $errors->first('gender') }}</strong>
</span>
@endif
</div>
</div>

<div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
<label for="password" class="col-md-4 control-label">Password</label>
<div class="col-md-6">
<input id="password" type="password" class="form-control" name="password" required>
@if ($errors->has('password'))
<span class="help-block">
<strong>{{ $errors->first('password') }}</strong>
</span>
@endif
</div>
</div>



<div class="form-group">
<div class="col-md-6 col-md-offset-4">
<button type="submit" class="btn btn-primary">
Submit
</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection