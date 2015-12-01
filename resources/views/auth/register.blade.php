@extends('layouts.page')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12">

           <div class="heading-title-alt text-left heading-border-bottom">
               <h5 class="text-uppercase">DON’T YOU HAVE AN ACCOUNT? <span class="theme-color">REGISTER NOW</span></h5>
           </div>
					 <p>
						<!-- Display Validation Errors -->
	 					@include('common.errors')
					 </p>

           <form class=" login magazine-grid" action="/auth/register" method="post">
						 	 {{ csrf_field() }}

               <div class="row">
                   <div class="form-group col-md-6">
										 	 <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                   </div>

                   <div class="form-group col-md-6">
										   <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                   </div>

                   <div class="form-group col-md-6">
										 	 <input type="password" name="password" class="form-control" placeholder="Choose Password">
                   </div>

                   <div class="form-group col-md-6">
										 	 <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                   </div>

                   <div class="form-group col-md-12">
										 	 <button type="submit" class="btn btn-small btn-dark-solid full-width btn-rounded" id="register-form-submit" name="register-form-submit" value="register">
												 <i class="fa fa-btn fa-sign-in"></i>Register
											 </button>
                   </div>
               </div>


           </form>
       </div>
   </div>
</div>
@endsection
