<div class="row">
    <div class="col-md-12">
        {!! Form::open([ 'route' => 'tasks.store', 'class' => 'form-horizontal' ]) !!}
            {!! csrf_field() !!}
            <div class="form-group col-md-9 {{ $errors->has('name') ? 'has-error' : '' }}">
              {!! Form::text('name', old('name'), [ 'class' => 'form-control', 'placeholder' => 'Name' ]) !!}
              @if($errors->has("name"))
              <span class="help-block">{{ $errors->first("name") }}</span>
              @endif
            </div>
            <div class="form-group col-md-3">
              {!! Form::button('<i class="fa fa-btn fa-plus"></i>Add Task', [ 'name' => 'task-form-submit', 'value' => 'create-task', 'type' => 'submit', 'class' => 'btn btn-small btn-dark-solid btn-rounded pull-right' ]) !!}
            </div>
        </form>
    </div>
</div>
