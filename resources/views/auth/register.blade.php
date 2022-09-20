@extends('layouts.app')
<title>Ray Register</title>
@section('content')

    <div class="container" >
        <img src="images/register.jpg" style=" opacity: 0.8; width: 100%; height: 100%; position: absolute;top: 0;right: 0;bottom: 0;left: 0;">
        <div class="row" >
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" style=" opacity: 0.8" >
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('FirstName') ? ' has-error' : '' }}">
                                <label for="FirstName" class="col-md-4 control-label">FirstName</label>

                                <div class="col-md-6">
                                    <input id="FirstName" type="text" class="form-control" name="FirstName" value="{{ old('FirstName') }}" required autofocus>

                                    @if ($errors->has('FirstName'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('FirstName') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('LastName') ? ' has-error' : '' }}">
                                <label for="LastName" class="col-md-4 control-label">LastName</label>

                                <div class="col-md-6">
                                    <input id="LastName" type="text" class="form-control" name="LastName" value="{{ old('LastName') }}" required autofocus>

                                    @if ($errors->has('LastName'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('LastName') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
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
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('MobileNumber') ? ' has-error' : '' }}">
                                <label for="MobileNumber" class="col-md-4 control-label">MobileNumber </label>

                                <div class="col-md-6">
                                    <input id="MobileNumber" type="text" class="form-control" name="MobileNumber" value="{{ old('MobileNumber') }}" required>

                                    @if ($errors->has('MobileNumber'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('MobileNumber') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <label for="gender" class="col-md-4 control-label">gender</label>

                                <div class="col-md-6">
                                    <input id="gender" type="text" class="form-control" name="gender" value="{{ old('gender') }}" required>

                                    @if ($errors->has('gender'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
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
