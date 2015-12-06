@extends('layouts.page')

@section('breadcrumbs', Breadcrumbs::render('403'))

@section('content')
<section class="body-content ">
  <div class="page-content">
    <div class="container">
      <div class="row page-content">
        <div class="col-md-5 text-center">
          <div class="error-avatar">
            <img src="/img/error-avatar.gif" alt="" />
          </div>
        </div>

        <div class="col-md-7">
          <div class="error-info">
            <div class="error404">
              403
            </div>
            <div class="error-txt">
              This is not the page you
              <br /> are looking for.
            </div>
            {!! link_to_route('login', 'Login', [], [ 'class' => 'btn btn-medium btn-theme-color' ]) !!} {!! link_to_route('register', 'Register', [], [ 'class' => 'btn btn-medium btn-dark-solid' ]) !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
