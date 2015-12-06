@extends('layouts.page')

@section('breadcrumbs', Breadcrumbs::render('tasks.index'))

@section('content')
<div class="container">
  <div class="page-header clearfix">
    @include('tasks.create')
  </div>
  <div class="row">
      <div class="col-md-12">
          @if($tasks->count())
          <div class="panel panel-default">
            <div class="panel-heading">
              Current Tasks
            </div>

            <div class="panel-body">
              <table class="table table-condensed table-striped">
                  <thead>
                      <tr>
                          <th colspan="2">Task</th>
                      </tr>
                  </thead>

                  <tbody>
                      @foreach($tasks as $task)
                          <tr>
                              <td>{{$task->name}}</td>
                              <td class="text-right">
                                  <a class="btn btn-xs btn-primary" href="{{ route('tasks.show', $task->id) }}"><i class="fa fa-btn fa-eye"></i> View</a>
                                  <a class="btn btn-xs btn-warning" href="{{ route('tasks.edit', $task->id) }}"><i class="fa fa-btn fa-edit"></i> Edit</a>
                                  {!! Form::open(['route' => ['tasks.destroy', $task->id], 'style' => 'display: inline;']) !!}
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                  {!! Form::button('<i class="fa fa-btn fa-trash"></i>Delete', [ 'name' => 'delete-task-submit', 'type' => 'submit', 'class' => 'btn btn-xs btn-danger' ]) !!}
                                  </form>
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
              {!! $tasks->render() !!}
            </div>
          </div>
          @else
            <h3 class="text-center alert alert-info">Empty!</h3>
          @endif
      </div>
    </div>
  </div>
@endsection
