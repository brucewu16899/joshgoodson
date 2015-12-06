@extends('layouts.page')

@section('breadcrumbs', Breadcrumbs::render('roles.index'))

@section('content')
<section class="body-content">
  <div class="container">
    <div class="row">
      <div class="page-header clearfix">
        <a class="btn btn-success pull-right" href="{{ route('roles.create') }}"><i class="fa fa-btn fa-plus"></i> Create Role</a>
      </div>
      <div class="col-md-12">
        @if($roles->count())
        <div id="alert" class="alert alert-danger alert-dismissible fade in" style="display: none">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4>Oh snap! Delete Permenantly!</h4>
          <p id="message">Are you sure you want to delete this item?</p>
          <p>
            <button type="button" id="confirmDeleteRole" class="btn btn-danger">Delete Role</button>
            <button type="button" id="cancelDelete" class="btn btn-default">Cancel</button>
          </p>
        </div>

        <table class="table table-condensed table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>NAME</th>
              <th>DISPLAY_NAME</th>
              <th>DESCRIPTION</th>
              <th>CREATED</th>
              <th>UPDATED</th>
              <th class="text-right">OPTIONS</th>
            </tr>
          </thead>

          <tbody>
            @foreach($roles as $role)
            <tr>
              <td>{{$role->id}}</td>
              <td>{{$role->name}}</td>
              <td>{{$role->display_name}}</td>
              <td>{{$role->description}}</td>
              <td>{{ date('F d, Y', strtotime($role->created_at)) }}</td>
              <td>{{ date('F d, Y', strtotime($role->updated_at)) }}</td>
              <td class="text-right">
                <a class="btn btn-xs btn-primary" href="{{ route('roles.show', $role->id) }}"><i class="fa fa-btn fa-eye"></i> View</a>
                <a class="btn btn-xs btn-warning" href="{{ route('roles.edit', $role->id) }}"><i class="fa fa-btn fa-edit"></i> Edit</a>
                <form id="deleteRole{{ $role->id }}" action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display: inline;">
                  {{ method_field('DELETE') }}
                  {!! csrf_field() !!}
                  <button id="deleteRole{{ $role->id }}" class="btn btn-xs btn-danger" data-toggle="alert" data-id="{{ $role->id }}" data-title="Delete Role <strong>{{ $role->name }}</strong>" data-message="Are you sure you want to delete the <strong>{{ $role->display_name }}</strong> role?">
                    <i class="fa fa-btn fa-trash"></i> Delete
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {!! $roles->render() !!}
        @else
        <h3 class="text-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</section>
@endsection

@section('page-scripts')
$("#cancelDelete").click(function() {
  $("#alert").hide();
});
@if($roles->count())
@foreach($roles as $role)
$("button#deleteRole{{ $role->id }}").click(function(e) {
  e.preventDefault();
  var id = $(this).data('id');
  var title = $(this).data('title');
  var message = $(this).data('message');
  $("#alert").data('id', id);
  $("#alert h4").html(title);
  $("#alert #message").html(message);
  $("#alert").show();
});
@endforeach
@endif
$("#confirmDeleteRole").click(function() {
  var id = $("#alert").data('id');
  $("form#deleteRole" + id).submit();
});
@endsection
