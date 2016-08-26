@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                <center><span class="glyphicon glyphicon-user fon" aria-hidden="</true"></span></div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('user') ? ' has-error' : '' }}">
                            <label for="user">Usuario</label>
                                <input id="user" type="user" class="form-control" name="user" value="{{ old('user') }}">

                                @if ($errors->has('user'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Contraseña</label>

                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary lg">
                                <i class="fa fa-btn fa-sign-in "></i> Ingresar
                            </button>
                        </div>
                        <div>
                              <center><a class="btn btn-link" href="{{ url('/password/reset') }}">¿Olvidaste tu contraseña?</a>
                              <a href="{{ url('/register') }}">Register</a></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
