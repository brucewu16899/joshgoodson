@extends('layouts.page')

@section('breadcrumbs', Breadcrumbs::render('dashboard.profile', $user))

@section('content')
<section class="body-content">
  <div class="container">
    <div class="page-header clearfix">
      <div class="btn-group pull-right" role="group" aria-label="...">
        <a class="btn btn-warning btn-group" role="group" href="{{ route('users.edit', $user->id) }}"><i class="fa fa-btn fa-edit"></i> Edit</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group col-md-6">
          <label for="name">NAME</label>
          <p class="form-control-static">{{$user->name}}</p>
        </div>
        <div class="form-group col-md-6">
           <label for="email">EMAIL</label>
           <p class="form-control-static">{{$user->email}}</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
