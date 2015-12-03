@extends('layouts.login')

@section('content')
<div class="login login-bg">
    <div class="container">
        <div class="login-box btn-rounded login-bg-input border-less-input">
            {!! Form::open([
              'route' => 'submitLogin',
              'id' => 'login-form',
              'name' => 'login-form'
            ]) !!}
                <div class="text-center"><h3>LOGIN</h3></div>
								{!! csrf_field() !!}
								<p>
									<!-- Display Validation Errors -->
									@include('common.errors')
								</p>

                <div class="form-group">
                  {!! Form::text('email', old('email'), [
                    'class' => 'form-control',
                    'placeholder' => 'Email'
                  ]) !!}
                </div>

                <div class="form-group">
                  {!! Form::password('password', [
                    'class' => 'form-control',
                    'placeholder' => 'Password'
                  ]) !!}
                </div>

                <div class="form-group">
                  {!! Form::button('<i class="fa fa-btn fa-sign-in"></i>Login', [
                    'name' => 'login-form-submit',
                    'value' => 'login',
                    'type' => 'submit',
                    'class' => 'btn btn-small btn-dark-solid full-width btn-rounded'
                  ]) !!}
                </div>
                <div class="form-group">
                  {!! Form::checkbox('remember', 'remember-me', false, ['id' => 'remember']) !!}
                  {!! Form::label('remember', 'Remember me') !!}
                  {!! link_to_route('forgotPassword', 'Forgot Password?', [], [
                    'class' => 'pull-right',
                    'data-toggle' => 'modal'
                  ]) !!}
                </div>
            </form>
        </div>
        <div class="copyright-row text-center dark-txt">
            Copyrights &copy; All Rights Reserved by
            {!! link_to_route('home', 'Josh Goodson', [], ['class' => 'theme-color']) !!}
        </div>
    </div>
</div>
@endsection
