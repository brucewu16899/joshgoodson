@extends('layouts.page')

@section('breadcrumbs', Breadcrumbs::render('blog'))

@section('content')
<section class="body-content">
		<div class="page-content">
				<div class="container">
						<div class="row">
								<div class="col-md-8">
										<!--classic image post-->
										<div class="blog-classic">
												<div class="date">
														24
														<span>MAR 2015</span>
												</div>
												<div class="blog-post">
														<div class="full-width">
																<img src="img/blog/post/p12.jpg" alt=""/>
														</div>
														<h4 class="text-uppercase"><a href="blog-single.html">standard blog post with photo</a></h4>
														<ul class="post-meta">
																<li><i class="fa fa-user"></i>posted by <a href="#">admin</a></li>
																<li><i class="fa fa-folder-open"></i> <a href="#">lifestyle</a>, <a href="#">travel</a>, <a href="#">fashion</a></li>
																<li><i class="fa fa-comments"></i> <a href="#">4 comments</a></li>
														</ul>
														<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  </p>
														<a href="blog-single.html" class="btn btn-small btn-dark-solid  "> Continue Reading</a>
												</div>
										</div>

										<!--classic gallery post-->
										<div class="blog-classic">
												<div class="date">
														20
														<span>MAR 2015</span>
												</div>
												<div class="blog-post">
														<div class="full-width ">
																<div class="post-slider post-img text-center relative">
																		<ul class="slides">
																				<li>
																						<a href="javascript:;" title="Freshness Photo"><img src="img/blog/post/p3.jpg" alt=""></a>
																				</li>
																				<li>
																						<a href="javascript:;" title="Awesome Lightbox"><img src="img/blog/post/p2.jpg" alt=""></a>
																				</li>
																				<li>
																						<a href="javascript:;" title="Massive UI Components"><img src="img/blog/post/p1.jpg" alt=""></a>
																				</li>
																		</ul>
																</div>
														</div>
														<h4 class="text-uppercase"><a href="blog-single.html">Gallery Image Post</a></h4>
														<ul class="post-meta">
																<li><i class="fa fa-user"></i>posted by <a href="#">admin</a></li>
																<li><i class="fa fa-folder-open"></i> <a href="#">lifestyle</a>, <a href="#">travel</a>, <a href="#">fashion</a></li>
																<li><i class="fa fa-comments"></i> <a href="#">4 comments</a></li>
														</ul>
														<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  </p>
														<a href="blog-single.html" class="btn btn-small btn-dark-solid  "> Continue Reading</a>
												</div>
										</div>

										<!--classic text post-->
										<div class="blog-classic">
												<div class="date">
														17
														<span>MAR 2015</span>
												</div>
												<div class="blog-post">
														<h4 class="text-uppercase"><a href="blog-single.html">standard Text post</a></h4>
														<ul class="post-meta">
																<li><i class="fa fa-user"></i>posted by <a href="#">admin</a></li>
																<li><i class="fa fa-folder-open"></i> <a href="#">lifestyle</a>, <a href="#">travel</a>, <a href="#">fashion</a></li>
																<li><i class="fa fa-comments"></i> <a href="#">4 comments</a></li>
														</ul>
														<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  </p>
														<a href="blog-single.html" class="btn btn-small btn-dark-solid  "> Continue Reading</a>
												</div>
										</div>

										<!--classic quote post-->
										<div class="blog-classic">
												<div class="date">
														17
														<span>MAR 2015</span>
												</div>
												<div class="blog-post">
														<blockquote class="quote-post">
																<p>
																		Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error
																</p>
														</blockquote>
														<span>- Princes Meridina</span>
												</div>
										</div>

										<!--classic audio post-->
										<div class="blog-classic">
												<div class="date">
														15
														<span>MAR 2015</span>
												</div>
												<div class="blog-post">
														<p class="audio-fit m-bot-50">
																<iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/115637399&amp;color=ff5500&amp;auto_play=false&amp;show_artwork=true"></iframe>
														</p>

														<h4 class="text-uppercase"><a href="blog-single.html">Audio post</a></h4>
														<ul class="post-meta">
																<li><i class="fa fa-user"></i>posted by <a href="#">admin</a></li>
																<li><i class="fa fa-folder-open"></i> <a href="#">lifestyle</a>, <a href="#">travel</a>, <a href="#">fashion</a></li>
																<li><i class="fa fa-comments"></i> <a href="#">4 comments</a></li>
														</ul>
														<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  </p>
														<a href="blog-single.html" class="btn btn-small btn-dark-solid  "> Continue Reading</a>
												</div>
										</div>

										<!--classic video post-->
										<div class="blog-classic">
												<div class="date">
														10
														<span>MAR 2015</span>
												</div>
												<div class="blog-post">
														<p class="video-fit m-bot-50">
																<iframe width="560" height="315" src="//www.youtube.com/embed/lq_BVyou38s"  allowfullscreen></iframe>
														</p>
														<h4 class="text-uppercase"><a href="blog-single.html">Video post</a></h4>
														<ul class="post-meta">
																<li><i class="fa fa-user"></i>posted by <a href="#">admin</a></li>
																<li><i class="fa fa-folder-open"></i> <a href="#">lifestyle</a>, <a href="#">travel</a>, <a href="#">fashion</a></li>
																<li><i class="fa fa-comments"></i> <a href="#">4 comments</a></li>
														</ul>
														<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  </p>
														<a href="blog-single.html" class="btn btn-small btn-dark-solid  "> Continue Reading</a>
												</div>

										</div>

										<!--pagination-->
										<div class="text-center">
												<ul class="pagination custom-pagination">
														<li><a href="#">Prev</a></li>
														<li class="active"><a href="#">1</a></li>
														<li><a href="#">2</a></li>
														<li><a href="#">3</a></li>
														<li><a href="#">4</a></li>
														<li><a href="#">5</a></li>
														<li><a href="#">Next</a></li>
												</ul>
										</div>
								</div>
								<div class="col-md-4">
										<!--search widget-->
										<div class="widget">
												<form class="form-inline form" role="form">
														<div class="search-row">
																<button class="search-btn" type="submit" title="Search">
																		<i class="fa fa-search"></i>
																</button>
																<input type="text" class="form-control" placeholder="Search...">
														</div>
												</form>
										</div>

										<!--author widget-->
										<div class="widget">
												<div class="heading-title-alt text-left heading-border-bottom">
														<h6 class="text-uppercase">about author</h6>
												</div>
												<div class="full-width avatar">
														<img src="img/blog/post/avatar.jpg" alt=""/>
												</div>
												<p>Persuaded to return to the shoemaker's shop, young Edward struggled on till three years of his wretched apprenticeship had passed over.</p>

												<span class="">- Nelson Leonard</span>
										</div>

										<!--latest post widget-->
										<div class="widget">
												<div class="heading-title-alt text-left heading-border-bottom">
														<h6 class="text-uppercase">latest post</h6>
												</div>
												<ul class="widget-latest-post">
														<li>
																<div class="thumb"><a href="#"><img src="img/blog/post/post-thumb.jpg" alt=""/></a></div>
																<div class="w-desk">
																		<a href="#">Old Father Getup</a>
																		April 25, 2014
																</div>
														</li>
														<li>
																<div class="thumb"><a href="#"><img src="img/blog/post/post-thumb-2.jpg" alt=""/></a></div>
																<div class="w-desk">
																		<a href="#">Represent is the best way</a>
																		March 28, 2014
																</div>
														</li>
														<li>
																<div class="thumb"><a href="#"><img src="img/blog/post/post-thumb-3.jpg" alt=""/></a></div>
																<div class="w-desk">
																		<a href="#">Alone with the music</a>
																		May 05, 2014
																</div>
														</li>
												</ul>
										</div>

										<!--follow us widget-->
										<div class="widget">
												<div class="heading-title-alt text-left heading-border-bottom">
														<h6 class="text-uppercase">follow us</h6>
												</div>
												<div class="widget-social-link circle">
														<a href="#"><i class="fa fa-facebook"></i></a>
														<a href="#"><i class="fa fa-twitter"></i></a>
														<a href="#"><i class="fa fa-dribbble"></i></a>
														<a href="#"><i class="fa fa-google-plus"></i></a>
														<a href="#"><i class="fa fa-behance"></i></a>
												</div>
										</div>

										<!--category widget-->
										<div class="widget">
												<div class="heading-title-alt text-left heading-border-bottom">
														<h6 class="text-uppercase">category</h6>
												</div>
												<ul class="widget-category">
														<li><a href="#">Animals</a></li>
														<li><a href="#">Landscape</a></li>
														<li><a href="#">Portrait</a></li>
														<li><a href="#">Wild Life</a></li>
														<li><a href="#">Video</a></li>
												</ul>
										</div>

										<!--comments widget-->
										<div class="widget">
												<div class="heading-title-alt text-left heading-border-bottom">
														<h6 class="text-uppercase">Latest comments </h6>
												</div>
												<ul class="widget-comments">
														<li> Jonathan on <a href="javascript:;">Vesti blulum quis dolor </a></li>
														<li> Jane Doe on <a href="javascript:;">Nam sed arcu tellus</a></li>
														<li> Margarita on <a href="javascript:;">Fringilla ut vel ipsum </a></li>
														<li> Smith on <a href="javascript:;">Vesti blulum quis dolor sit</a></li>
												</ul>
										</div>

										<!--tags widget-->
										<div class="widget">
												<div class="heading-title-alt text-left heading-border-bottom">
														<h6 class="text-uppercase">tag cloud</h6>
												</div>
												<div class="widget-tags">
														<a href="">Portfolio</a>
														<a href="">Design</a>
														<a href="">Link</a>
														<a href="">Gallery</a>
														<a href="">Video</a>
														<a href="">Clean</a>
														<a href="">Retina</a>
												</div>
										</div>
								</div>
						</div>
				</div>
		</div>
</section>
@endsection
