@extends('layouts.page')

@section('breadcrumbs', Breadcrumbs::render('roles.create'))

@section('content')
<section class="body-content">
  <div class="container">
    <div class="row">
      <div class="page-header clearfix"></div>
      <div class="col-md-12">
        <form action="{{ route('roles.store') }}" method="POST">
          {!! csrf_field() !!}
          <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::text('name', old('name'), [ 'class' => 'form-control', 'placeholder' => 'Name' ]) !!}
            @if($errors->has("name"))
            <span class="help-block">{{ $errors->first("name") }}</span>
            @endif
          </div>
          <div class="form-group {{ $errors->has('display_name') ? 'has-error' : '' }}">
            {!! Form::text('display_name', old('display_name'), [ 'class' => 'form-control', 'placeholder' => 'Display Name' ]) !!}
            @if($errors->has("display_name"))
            <span class="help-block">{{ $errors->first("display_name") }}</span>
            @endif
          </div>
          <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
            {!! Form::text('description', old('description'), [ 'class' => 'form-control', 'placeholder' => 'Description' ]) !!}
            @if($errors->has("description"))
            <span class="help-block">{{ $errors->first("description") }}</span>
            @endif
          </div>
          <div class="form-group">
            {!! Form::button('<i class="fa fa-btn fa-plus"></i>Create Role', [ 'name' => 'role-form-submit', 'value' => 'create-role', 'type' => 'submit', 'class' => 'btn btn-small btn-dark-solid btn-rounded' ]) !!}
            <a class="btn btn-link pull-right" href="{{ route('roles.index') }}"><i class="fa fa-btn fa-backward"></i> Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
