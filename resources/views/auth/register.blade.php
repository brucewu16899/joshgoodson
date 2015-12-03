@extends('layouts.page')

@section('title', 'Register')
@section('breadcrumbs', Breadcrumbs::render('register'))

@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12">
         <div class="page-content">
           <div class="heading-title-alt text-left heading-border-bottom">
               <h5 class="text-uppercase">DON’T YOU HAVE AN ACCOUNT? <span class="theme-color">REGISTER NOW</span></h5>
           </div>
					 <p>
						<!-- Display Validation Errors -->
	 					@include('common.errors')
					 </p>

           {!! Form::open(['route' => 'submitRegister', 'class' => 'login magazine-grid']) !!}
						 	 {!! csrf_field() !!}

               <div class="row">
                   <div class="form-group col-md-6">
                     {!! Form::text('name', old('name'), [
                       'class' => 'form-control',
                       'placeholder' => 'Name'
                     ]) !!}
                   </div>

                   <div class="form-group col-md-6">
                     {!! Form::text('email', old('email'), [
                       'class' => 'form-control',
                       'placeholder' => 'Email'
                     ]) !!}
                   </div>

                   <div class="form-group col-md-6">
                     {!! Form::password('password', [
                       'class' => 'form-control',
                       'placeholder' => 'Choose Password'
                     ]) !!}
                   </div>

                   <div class="form-group col-md-6">
                     {!! Form::password('password_confirmation', [
                       'class' => 'form-control',
                       'placeholder' => 'Confirm Password'
                     ]) !!}
                   </div>

                   <div class="form-group col-md-12">
                     {!! Form::button('<i class="fa fa-btn fa-sign-in"></i>Register', [
                       'name' => 'register-form-submit',
                       'value' => 'register',
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
@endsection
