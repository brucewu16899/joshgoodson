@extends('layouts.page')

@section('breadcrumbs', Breadcrumbs::render('users.edit'))

@section('content')
<section class="body-content">
  <div class="container">
    <div class="row">
      <div class="page-header clearfix"></div>
      <div class="col-md-12">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
          <input type="hidden" name="_method" value="PUT">
          {!! csrf_field() !!}
          <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::text('name', $user->name, [ 'class' => 'form-control', 'placeholder' => 'Name' ]) !!}
            @if($errors->has("name"))
            <span class="help-block">{{ $errors->first("name") }}</span>
            @endif
          </div>
          <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            {!! Form::text('email', $user->email, [ 'class' => 'form-control', 'placeholder' => 'Email' ]) !!}
            @if($errors->has("email"))
            <span class="help-block">{{ $errors->first("email") }}</span>
            @endif
          </div>
          <div class="form-group">
            {!! Form::button('<i class="fa fa-btn fa-primary"></i>Save', ['name' => 'user-form-submit', 'value' => 'edit-user', 'type' => 'submit', 'class' => 'btn btn-small btn-dark-solid btn-rounded' ]) !!}
            <a class="btn btn-link pull-right" href="{{ route('users.index') }}"><i class="fa fa-btn fa-backward"></i> Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
