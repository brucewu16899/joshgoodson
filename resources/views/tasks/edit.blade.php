@extends('layouts.page')

@section('breadcrumbs', Breadcrumbs::render('tasks.edit'))

@section('content')
<section class="body-content">
  <div class="container">
    @include('common.errors')

    <div class="row">
      <div class="page-header clearfix"></div>
      <div class="col-md-12">
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::text('name', $task->name, [ 'class' => 'form-control', 'placeholder' => 'Name' ]) !!}
            @if($errors->has("name"))
            <span class="help-block">{{ $errors->first("name") }}</span>
            @endif
          </div>
          <div class="form-group">
            {!! Form::button('<i class="fa fa-btn fa-primary"></i>Save', ['name' => 'task-form-submit', 'value' => 'edit-task', 'type' => 'submit', 'class' => 'btn btn-small btn-dark-solid btn-rounded' ]) !!}
            <a class="btn btn-link pull-right" href="{{ route('tasks.index') }}"><i class="fa fa-btn fa-backward"></i> Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
