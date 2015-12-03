@extends('layouts.page')

@section('title', 'My Tasks')
@section('breadcrumbs', Breadcrumbs::render('tasks'))

@section('content')
	<div class="container">
		<div class="page-content">
			<div class="col-sm-offset-2 col-sm-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						New Task
					</div>

					<div class="panel-body">
						<!-- Display Validation Errors -->
						@include('common.errors')

						<!-- New Task Form -->
						{!! Form::open([
              'route' => 'saveTask',
              'class' => 'form-horizontal'
            ]) !!}
							{{ csrf_field() }}

							<!-- Task Name -->
							<div class="form-group">
								<label for="task-name" class="col-sm-3 control-label">Task</label>

								<div class="col-sm-6">
									<input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
								</div>
							</div>

							<!-- Add Task Button -->
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-6">
									<button type="submit" class="btn btn-default">
										<i class="fa fa-btn fa-plus"></i>Add Task
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<!-- Current Tasks -->
				@if (count($tasks) > 0)
					<div class="panel panel-default">
						<div class="panel-heading">
							Current Tasks
						</div>

						<div class="panel-body">
							<table class="table table-striped task-table">
								<thead>
									<th>Task</th>
									<th>&nbsp;</th>
								</thead>
								<tbody>
									@foreach ($tasks as $task)
										<tr>
											<td class="table-text"><div>{{ $task->name }}</div></td>

											<!-- Task Delete Button -->
											<td>
												{!! Form::open(['route' => ['deleteTask', $task->id]]) !!}
													{{ csrf_field() }}
													{{ method_field('DELETE') }}

													{!! Form::button('<i class="fa fa-btn fa-trash"></i>Delete', [
				                    'name' => 'delete-task-submit',
				                    'type' => 'submit',
				                    'class' => 'btn btn-danger'
				                  ]) !!}
												</form>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				@endif
			</div>
		</div>
	</div>
@endsection
