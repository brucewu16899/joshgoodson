@extends('layouts.page')

@section('breadcrumbs', Breadcrumbs::render('roles.show', $role))

@section('content')
<section class="body-content">
  <div class="container">
    <div class="row">
      <div class="page-header clearfix">
        <form id="deleteRole{{ $role->id }}" action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display: inline;">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="btn-group pull-right" role="group" aria-label="...">
            <a class="btn btn-warning btn-group" role="group" href="{{ route('roles.edit', $role->id) }}"><i class="fa fa-btn fa-edit"></i> Edit</a>
            <button type="submit" id="deleteRole" class="btn btn-danger" data-id="{{ $role->id }}">Delete <i class="fa fa-btn fa-trash"></i></button>
          </div>
        </form>
      </div>
      <div class="col-md-12">
        <div id="alert" class="alert alert-danger alert-dismissible fade in" style="display: none">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4>Delete Permenantly?</h4>
          <p id="message">Are you sure you want to delete this role?</p>
          <p>
            <button type="button" id="confirmDeleteRole" class="btn btn-danger">Delete Role</button>
            <button type="button" id="cancelDelete" class="btn btn-default">Cancel</button>
          </p>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="id">ID</label>
            <p class="form-control-static">{{$role->id}}</p>
          </div>
          <div class="form-group col-md-6">
            <label for="name">NAME</label>
            <p class="form-control-static">{{$role->name}}</p>
          </div>
          <div class="form-group col-md-6">
            <label for="display_name">DISPLAY NAME</label>
            <p class="form-control-static">{{$role->display_name}}</p>
          </div>
          <div class="form-group col-md-12">
            <label for="description">DESCRIPTION</label>
            <p class="form-control-static">{{$role->description}}</p>
          </div>
          <div class="form-group col-md-6">
            <label for="timestamps">CREATED AT</label>
            <p class="form-control-static">{{$role->created_at}}</p>
          </div>
          <div class="form-group col-md-6">
            <label for="timestamps">UPDATED AT</label>
            <p class="form-control-static">{{$role->updated_at}}</p>
          </div>
          <div class="form-group col-md-12">
            <a class="btn btn-link pull-right" href="{{ route('roles.index') }}"><i class="fa fa-backward"></i> Back</a>
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
$("#deleteRole").click(function(e) {
  e.preventDefault();
  var id = $(this).data('id');
  $("#alert").data('id', id);
  $("#alert").show();
});
$("#confirmDeleteRole").click(function() {
  var id = $("#alert").data('id');
  $("form#deleteRole" + id).submit();
});
@endsection
