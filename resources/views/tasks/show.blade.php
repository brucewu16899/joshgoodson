@extends('layouts.page')

@section('breadcrumbs', Breadcrumbs::render('tasks.show', $task))

@section('content')
<section class="body-content">
  <div class="container">
    <div class="page-header clearfix">
      <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
          <input type="hidden" name="_method" value="DELETE">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="btn-group pull-right" role="group" aria-label="...">
              <a class="btn btn-warning btn-group" role="group" href="{{ route('tasks.edit', $task->id) }}"><i class="fa fa-edit"></i> Edit</a>
              <button type="submit" class="btn btn-danger">Delete <i class="fa fa-trash"></i></button>
          </div>
      </form>
    </div>
    <div class="col-md-12 clearfix">
      <div class="row">
        <div class="col-md-12">
          <form action="#">
            <div class="form-group">
              <label for="nome">ID</label>
              <p class="form-control-static">{{$task->id}}</p>
            </div>
            <div class="form-group">
              <label for="name">NAME</label>
              <p class="form-control-static">{{$task->name}}</p>
            </div>
          </form>
          <a class="btn btn-link pull-right" href="{{ route('tasks.index') }}"><i class="fa fa-backward"></i> Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
