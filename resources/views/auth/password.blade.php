@extends('layouts.page')

@section('breadcrumbs', Breadcrumbs::render('forgotPassword'))

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 text-center col-md-offset-3">
      <div class="page-content">
        <div class="heading-title-alt text-left heading-border-bottom">
          <h5 class="text-uppercase">FORGOT YOUR PASSWORD? <span class="theme-color">RESET NOW</span></h5>
        </div>
        <p>
          @include('common.errors')
        </p>

        {!! Form::open(['route' => 'submitForgotPassword', 'class' => 'login magazine-grid']) !!}
          {!! csrf_field() !!}
          <div class="row">
            <div class="form-group">
              {!! Form::text('email', old('email'), [ 'class' => 'form-control', 'placeholder' => 'Email' ]) !!}
            </div>

            <div class="form-group">
              {!! Form::button('<i class="fa fa-btn fa-mail-forward"></i>Send Password Reset Link', [ 'name' => 'register-form-submit', 'value' => 'register', 'type' => 'submit', 'class' => 'btn btn-small btn-dark-solid full-width btn-rounded' ]) !!}
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
