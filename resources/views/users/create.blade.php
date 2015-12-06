@extends('layouts.page')

@section('breadcrumbs', Breadcrumbs::render('users.create'))

@section('content')
<section class="body-content">
  <div class="container">
    <div class="row">
      <div class="page-header clearfix"></div>
      <div class="col-md-12">
        {!! Form::open(['route' => 'users.store']) !!}
          {!! csrf_field() !!}
          <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::text('name', old('name'), [ 'class' => 'form-control', 'placeholder' => 'Name' ]) !!}
            @if($errors->has("name"))
            <span class="help-block">{{ $errors->first("name") }}</span>
            @endif
          </div>
          <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            {!! Form::text('email', old('email'), [ 'class' => 'form-control', 'placeholder' => 'Email' ]) !!}
            @if($errors->has("email"))
            <span class="help-block">{{ $errors->first("email") }}</span>
            @endif
          </div>
          <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
            {!! Form::password('password', [ 'class' => 'form-control', 'placeholder' => 'Choose Password' ]) !!}
            @if($errors->has("password"))
            <span class="help-block">{{ $errors->first("password") }}</span>
            @endif
          </div>
          <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
            {!! Form::password('password_confirmation', [ 'class' => 'form-control', 'placeholder' => 'Confirm Password' ]) !!}
            @if($errors->has("password"))
            <span class="help-block">{{ $errors->first("password_confirmation") }}</span>
            @endif
          </div>
          <div class="form-group">
            {!! Form::button('<i class="fa fa-btn fa-plus"></i>Create User', [ 'name' => 'user-form-submit', 'value' => 'create-user', 'type' => 'submit', 'class' => 'btn btn-small btn-dark-solid btn-rounded' ]) !!}
            <a class="btn btn-link pull-right" href="{{ route('users.index') }}"><i class="fa fa-btn fa-backward"></i> Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
