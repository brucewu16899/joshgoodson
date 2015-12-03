@extends('layouts.page')

@section('title', 'My Inbox')

@section('content')
<section class="body-content">
		<div class="page-content">
				<div class="container">
						<div class="row">
              <div class="col-md-6 col-md-offset-3">
                @if (Session::has('error_message'))
                    <div class="alert alert-danger" role="alert">
                        {!! Session::get('error_message') !!}
                    </div>
                @endif
                @if($threads->count() > 0)
                    @foreach($threads as $thread)
                    <?php $class = $thread->isUnread($currentUserId) ? 'alert-info' : ''; ?>
                    <div class="media alert {!!$class!!}">
                        <h4 class="media-heading">{!! link_to('messages/' . $thread->id, $thread->subject) !!}</h4>
                        <p>{!! $thread->latestMessage->body !!}</p>
                        <p><small><strong>Creator:</strong> {!! $thread->creator()->name !!}</small></p>
                        <p><small><strong>Participants:</strong> {!! $thread->participantsString(Auth::id()) !!}</small></p>
                    </div>
                    @endforeach
                @else
                    <p class="text-center">Sorry, no threads. {!! link_to_route('messages.create', 'Create new message') !!}</p>
                @endif
              </div>
            </div>
        </div>
    </div>
</section>
@stop
