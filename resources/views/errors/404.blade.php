@extends('layouts.page')

@section('content')
<section class="page-title">
    <div class="container">
        <h4 class="text-uppercase">PAGE NOT FOUND</h4>
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">PAGE NOT FOUND</li>
        </ol>
    </div>
</section>

<section class="body-content ">
    <div class="page-content">
        <div class="container">
            <div class="row page-content">
                <div class="col-md-5 text-center">
                    <div class="error-avatar">
                        <img src="/img/error-avatar.gif" alt=""/>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="error-info">
                        <div class="error404">
                            404
                        </div>
                        <div class="error-txt">
                            This is not the page you <br />
                            are looking for.
                        </div>
                        <a href="/" class="btn btn-medium  btn-theme-color">Take Me Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
