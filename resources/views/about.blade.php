@extends('layouts.page')

@section('breadcrumbs', Breadcrumbs::render('about'))

@section('content')
<section class="page-title banner-background dark">
		<div class="container">
				<div class="row">
						<div class="col-md-6 col-md-offset-6">
								<h1 class="text-uppercase theme-color">Josh Goodson</h1>
								<span class="text-uppercase"> Infrastructure Engineer</span>
						</div>
				</div>
		</div>
</section>

<section class="body-content">
		<div class="full-width promo-box dark-bg">
				<div class="container">
						<div class="col-md-12">
								<div class="promo-info">
										<span class="light-txt text-uppercase m-top-0">Need an experienced software engineer to help realize your next big idea? </span>
										<h3 class="light-txt">start <span class="theme-color">building your project</span> with Josh</h3>
								</div>
								<div class="promo-btn">
										{!! link_to_route('contact', 'contact now', [], [
											'class' => 'btn btn-medium btn-rounded btn-light-solid btn-transparent text-uppercase'
										]) !!}
								</div>
						</div>
				</div>
		</div>

		<div class="post-list-aside left-side">
				<div class="container">
						<div class="row">
								<div class="col-md-6 col-md-offset-6">
										<div class="post-desk">
												<div class="m-bot-30">
														<span class="post-sub-title text-uppercase">who am i</span>
														<h4 class="text-uppercase">
																i am a hardcore web developer
														</h4>
												</div>

												<p>
														Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content.
												</p>

												<ul class="m-bot-30 circle-list inline-block">
														<li>
																Lorem ipsum dolor sit amet, consectetur adipisicing elit.
														</li>
														<li>
																Adipisci blanditiis delectus deserunt dolorem
														</li>
														<li>
																Impedit inventore itaque iure libero maiores simso.
														</li>
												</ul>

												<div>
													{!! link_to('about', 'Read More', [
														'class' => 'btn btn-small btn-rounded btn-dark-solid'
													]) !!}
												</div>
										</div>
								</div>

						</div>
				</div>
		</div>

		<hr/>

		<div class=" post-parallax">
				<div class="relative page-content">
						<div class="dark-overlay"></div>
						<div class="container">
								<div class="row">
										<div class="col-md-6">
												<div class="v-middle">
														<h3 class="light-txt text-uppercase">Skills and Experience</h3>
												</div>
										</div>
										<div class="col-md-6">
												<div class="light-txt space">
														<h4 class="text-uppercase light-txt">
																I AM damn expart
														</h4>

														<p class="light-txt">
																We are a team of multi-skilled and curious digital specialists who are always up for a massive challenge forever. We are a team of multi-skilled and curious digital specialists who are always up for a massive challenge forever.
														</p>

														<div class="p-top-30">
																<div class="progress massive-progress">
																		<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
																				HTML / CSS / JQUERY  <span>80%</span>
																		</div>
																</div>
																<div class="progress massive-progress">
																		<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
																				PHOTOSHOP  <span>90%</span>
																		</div>
																</div>
																<div class="progress massive-progress">
																		<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
																				GRAPHIC DESIGN <span>75% </span>
																		</div>
																</div>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>

		<hr/>

		<div class="page-content">
				<div class="container">
						<div class="row">
								<div class="col-md-12">
										<div class="post-list-aside">
												<div class="post-single">
														<div class="col-md-6">
																<div class="post-img title-img">
																		<img src="/img/post/p7.jpg" alt="">
																		<div class="info">I code for fun</div>
																</div>
														</div>
														<div class="col-md-6">
																<div class="post-desk p-top-0">
																		<h4 class="text-uppercase">
																				<a href="#">history</a>
																		</h4>

																		<p>
																				Phasellus fringilla suscipit risus nec eleifend. Pellentesque eu quam sem, ac malesuada leo sem quam pellente. Awesome sliders give you the opportunity to showcase your content.
																		</p>

																		<dl class="accordion time-line">
																				<dt>
																						<a href="">massive has a business Philosophy</a>
																				</dt>
																				<dd>
																						Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam.
																				</dd>
																				<dt>
																						<a href="">massive Mission & Vision</a>
																				</dt>
																				<dd>
																						Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. leo quam aliquet diam, congue laoreet elit metus eget diam.
																				</dd>
																				<dt>
																						<a href="">massive Management & Policy</a>
																				</dt>
																				<dd>
																						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. Proin ac metus diam.
																				</dd>
																		</dl>
																</div>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>

		<div class="page-content">
				<div class="container">
						<div class="row">
								<div class="col-md-12">
										<div class="promo-box gray-bg round-5 m-bot-50">
												<div class="promo-info">
														<h4>new <span class="theme-color">offer</span> for this <span class="theme-color">winter</span></h4>
														<span>Nullam ut consectetur dolor. Sed sit amet iaculis nisi. Mauris ridiculus elementum felis etewe blandit. </span>
												</div>
												<div class="promo-btn">
													{!! link_to('contact', 'contact now', [
														'class' => 'btn btn-medium btn-rounded btn-dark-solid text-uppercase'
													]) !!}
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
</section>
@endsection
