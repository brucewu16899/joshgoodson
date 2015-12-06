@extends('layouts.page')

@section('breadcrumbs', Breadcrumbs::render('users.index'))

@section('content')
<section class="body-content">
  <div class="container">
    <div class="row">
      <div class="page-header clearfix">
        <h1>
          <a class="btn btn-success pull-right" href="{{ route('users.create') }}"><i class="fa fa-btn fa-plus"></i> Create User</a>
        </h1>
      </div>
      <div class="col-md-12">
        @if($users->count())
        <div id="alert" class="alert alert-danger alert-dismissible fade in" style="display: none">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4>Oh snap! Delete Permenantly!</h4>
          <p id="message">Are you sure you want to delete this item?</p>
          <p>
            <button type="button" id="confirmDeleteUser" class="btn btn-danger">Delete User</button>
            <button type="button" id="cancelDelete" class="btn btn-default">Cancel</button>
          </p>
        </div>

        <table class="table table-condensed table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>NAME</th>
              <th>EMAIL</th>
              <th class="text-right">OPTIONS</th>
            </tr>
          </thead>

          <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td class="text-right">
                <a class="btn btn-xs btn-primary" href="{{ route('users.show', $user->id) }}"><i class="fa fa-btn fa-eye"></i> View</a>
                <a class="btn btn-xs btn-warning" href="{{ route('users.edit', $user->id) }}"><i class="fa fa-btn fa-edit"></i> Edit</a>
                <form id="deleteUser{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                  {{ method_field('DELETE') }}
                  {!! csrf_field() !!}
                  <button id="deleteUser{{ $user->id }}" type="submit" class="btn btn-xs btn-danger" data-toggle="alert" data-id="{{ $user->id }}" data-title="Delete User <strong>{{ $user->name }}</strong>" data-message="Are you sure you want to delete the <strong>{{ $user->name }}</strong> user?"><i class="fa fa-btn fa-trash"></i> Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {!! $users->render() !!}
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
@if($users->count())
@foreach($users as $user)
$("button#deleteUser{{ $user->id }}").click(function(e) {
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
$("#confirmDeleteUser").click(function() {
  var id = $("#alert").data('id');
  $("form#deleteUser" + id).submit();
});
@endsection
