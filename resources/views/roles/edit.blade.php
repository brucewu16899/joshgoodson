@extends('layouts.page')

@section('breadcrumbs', Breadcrumbs::render('roles.edit'))

@section('content')
<section class="body-content">
  <div class="container">
    <div class="row">
      <div class="page-header clearfix"></div>
      <div class="col-md-12">
        <form action="{{ route('roles.update', $role->id) }}" method="POST">
          <input type="hidden" name="_method" value="PUT">
          {!! csrf_field() !!}
          <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::text('name', $role->name, [ 'class' => 'form-control', 'placeholder' => 'Name' ]) !!}
            @if($errors->has("name"))
            <span class="help-block">{{ $errors->first("name") }}</span>
            @endif
          </div>
          <div class="form-group {{ $errors->has('display_name') ? 'has-error' : '' }}">
            {!! Form::text('display_name', $role->display_name, [ 'class' => 'form-control', 'placeholder' => 'Display Name' ]) !!}
            @if($errors->has("display_name"))
            <span class="help-block">{{ $errors->first("display_name") }}</span>
            @endif
          </div>
          <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
            {!! Form::text('description', $role->description, [ 'class' => 'form-control', 'placeholder' => 'Description' ]) !!}
            @if($errors->has("description"))
            <span class="help-block">{{ $errors->first("description") }}</span>
            @endif
          </div>
          <div class="form-group">
            {!! Form::button('<i class="fa fa-btn fa-primary"></i>Save', ['name' => 'role-form-submit', 'value' => 'edit-role', 'type' => 'submit', 'class' => 'btn btn-small btn-dark-solid btn-rounded' ]) !!}
            <a class="btn btn-link pull-right" href="{{ route('roles.index') }}"><i class="fa fa-btn fa-backward"></i> Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
