@extends('layouts.login')

@section('content')

<div class="login login-bg">

    <div class="container">
        <div class="login-box btn-rounded login-bg-input border-less-input">
            <form id="login-form" name="login-form" action="/auth/login" method="post">
                <div class="text-center"><h3>LOGIN</h3></div>

								{{ csrf_field() }}

								<p>
									<!-- Display Validation Errors -->
									@include('common.errors')
								</p>

                <div class="form-group">
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                </div>

                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <div class="form-group">
                    <button class="btn btn-small btn-dark-solid full-width btn-rounded" type="submit" name="login-form-submit" value="login"><i class="fa fa-btn fa-sign-in"></i>Login</button>
                </div>
                <div class="form-group">
                    <input type="checkbox" value="remember-me" id="checkbox1"> <label for="checkbox1">Remember me</label>
                    <a class="pull-right" data-toggle="modal" href="#forgotPass"> Forgot Password?</a>
                </div>


            </form>
        </div>
        <div class="copyright-row text-center dark-txt">
            Copyrights © All Rights Reserved by  <a href="http://joshgoodson.com" class="theme-color">Josh Goodson</a>
        </div>
    </div>

</div>
@endsection
