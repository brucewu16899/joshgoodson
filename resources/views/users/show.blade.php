@extends('layouts.page')

@section('breadcrumbs', Breadcrumbs::render('users.show', $user))

@section('content')
<section class="body-content">
  <div class="container">
    <div class="row">
      <div class="page-header clearfix">
        <form id="deleteUser" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="btn-group pull-right" role="group" aria-label="...">
            <a class="btn btn-warning btn-group" role="group" href="{{ route('users.edit', $user->id) }}"><i class="fa fa-btn fa-edit"></i> Edit</a>
            <button id="deleteUser" type="submit" class="btn btn-danger">Delete <i class="fa fa-btn fa-trash"></i></button>
          </div>
        </form>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="alert" class="alert alert-danger alert-dismissible fade in" style="display: none">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4>Delete Permenantly?</h4>
            <p id="message">Are you sure you want to delete this user?</p>
            <p>
              <button type="button" id="confirmDeleteUser" class="btn btn-danger">Delete User</button>
              <button type="button" id="cancelDelete" class="btn btn-default">Cancel</button>
            </p>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="nome">ID</label>
              <p class="form-control-static">{{$user->id}}</p>
            </div>
            <div class="form-group col-md-6">
              <label for="name">NAME</label>
              <p class="form-control-static">{{$user->name}}</p>
            </div>
            <div class="form-group col-md-6">
              <label for="email">EMAIL</label>
              <p class="form-control-static">{{$user->email}}</p>
            </div>
            <div class="form-group col-md-12">
              <a class="btn btn-link pull-right" href="{{ route('users.index') }}"><i class="fa fa-backward"></i> Back</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('page-scripts')
$("#cancelDelete").click(function() {
  $("#alert").hide();
});
$("button#deleteUser").click(function(e) {
  e.preventDefault();
  var id = $(this).data('id');
  $("#alert").data('id', id);
  $("#alert").show();
});
$("#confirmDeleteUser").click(function() {
  $("form#deleteUser").submit();
});
@endsection
