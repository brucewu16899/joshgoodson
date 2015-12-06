@extends('layouts.page')

@section('breadcrumbs', Breadcrumbs::render('messages.create'))

@section('content')
<section class="body-content">
  <div class="page-content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
          {!! Form::open(['route' => 'messages.store']) !!}
          <div class="form-group">
            {!! Form::label('subject', 'Subject', ['class' => 'control-label']) !!}
            {!! Form::text('subject', null, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('message', 'Message', ['class' => 'control-label']) !!}
            {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
          </div>

          @if($users->count() > 0)
          <div class="checkbox">
            @foreach($users as $user)
            <label title="{!!$user->name!!}">
              <input type="checkbox" name="recipients[]" value="{!!$user->id!!}">{!!$user->name!!}</label>
            @endforeach
          </div>
          @endif

          <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</section>
@stop
