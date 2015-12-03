@extends('layouts.page')

@section('title', 'Reset Password')
@section('breadcrumbs', Breadcrumbs::render('resetPassword'))

@section('content')
<div class="container">
   <div class="row">
     <div class="col-md-6 text-center col-md-offset-3">
       <div class="page-content">
         <div class="heading-title-alt text-left heading-border-bottom">
             <h5 class="text-uppercase">FORGOT YOUR PASSWORD? <span class="theme-color">RESET NOW</span></h5>
         </div>
         <p>
          <!-- Display Validation Errors -->
          @include('common.errors')
         </p>

         {!! Form::open(['route' => 'submitResetPassword', 'class' => 'login magazine-grid']) !!}
             {!! csrf_field() !!}
             {!! Form::hidden('token', $token) !!}

             <div class="row">
                 <div class="form-group">
                     {!! Form::text('email', old('email'), [
                       'class' => 'form-control',
                       'placeholder' => 'Email'
                     ]) !!}
                 </div>

                 <div class="form-group">
                   {!! Form::password('password', [
                     'class' => 'form-control',
                     'placeholder' => 'Choose Password'
                   ]) !!}
                 </div>

                 <div class="form-group">
                   {!! Form::password('password_confirmation', [
                     'class' => 'form-control',
                     'placeholder' => 'Confirm Password'
                   ]) !!}
                 </div>

                 <div class="form-group">
                     {!! Form::button('<i class="fa fa-btn fa-user-secret"></i>Reset Password', [
                       'name' => 'reset-form-submit',
                       'value' => 'reset',
                       'type' => 'submit',
                       'class' => 'btn btn-small btn-dark-solid full-width btn-rounded'
                     ]) !!}
                 </div>
             </div>
         </form>
       </div>
     </div>
  </div>
</div>
