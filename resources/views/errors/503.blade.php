@extends('layouts.simple')

@section('page')
<section class="maintenance-banner page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="/img/maintenance-icon.png" alt=""/>
                <div class="heading-title-alt text-center m-top-30 inline-block m-bot-0">
                    <h3 class="text-uppercase">SITE IS UNDER MAINTENANCE</h3>
                    <p>We’’ll be back shortly </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="body-content">
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="subscribe-box gray-bg round-5 m-bot-100">
                   <div class="subscribe-info">
                       <h4>subscribe to get in touch</h4>
                   </div>
                   <div class="subscribe-form">
                       <form class="form-inline">
                           <input type="text" class="form-control" placeholder="Enter your email address">
                           <button type="submit" class="btn btn-medium btn-rounded btn-dark-solid text-uppercase">subscribe</button>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
@endsection
