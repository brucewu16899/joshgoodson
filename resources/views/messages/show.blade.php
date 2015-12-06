@extends('layouts.page')

@section('breadcrumbs', Breadcrumbs::render('messages.show'))

@section('content')
<section class="body-content">
  <div class="container">
    <div class="row">
      <div class="page-content">
        <div class="col-md-6 col-md-offset-3">
          @foreach($thread->messages as $message)
          <div class="media">
            <a class="pull-left" href="#">
              <img src="//www.gravatar.com/avatar/{!! md5($message->user->email) !!}?s=64" alt="{!! $message->user->name !!}" class="img-circle">
            </a>
            <div class="media-body">
              <h5 class="media-heading">{!! $message->user->name !!}</h5>
              <p>{!! $message->body !!}</p>
              <div class="text-muted"><small>Posted {!! $message->created_at->diffForHumans() !!}</small></div>
            </div>
          </div>
          @endforeach

          <div style="padding-top: 40px;">
            <h2>Add a new message</h2>
            {!! Form::open(['route' => ['messages.update', $thread->id], 'method' => 'PUT']) !!}
              <div class="form-group">
                {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
              </div>

              @if($users->count() > 0)
              <div class="checkbox">
                @foreach($users as $user)
                <label title="{!! $user->name !!}">
                  <input type="checkbox" name="recipients[]" value="{!! $user->id !!}">{!! $user->name !!}</label>
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
  </div>
</section>
@stop
