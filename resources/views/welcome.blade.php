@extends('layouts.page')

@section('breadcrumbs', Breadcrumbs::render('home'))

@section('content')
<section class="body-content">
		<div class="page-content">
				<div class="container">
						<div class="row">
								<div class="heading-title-alt border-short-bottom text-center">
									<h3 class="text-uppercase">Welcome</h3>
									<div class="half-txt">
										You can store tasks here! Please register or login.
									</div>
								</div>
						</div>
				</div>
		</div>
</section>
@endsection
