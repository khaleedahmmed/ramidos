@extends('website.layouts.master')

@section('title', 'Ramido’s Group Co')


@section('content')
<!-- Page Title Start -->
<!-- Page Title End -->
	<!-- Service Details Section Start -->
	<section class="service-details-page pdt-110 pdb-90">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-5">
					<div class="service-nav-menu mrb-30">
						<div class="service-link-list mb-30">
							<ul class="">
								@foreach ($services as $services )
								<li class="{{ ($service->id == $services->id) ? 'active' : '' }}"><a href="{{ url('services/'.$services->id) }}"><i class="fa fa-chevron-right"></i>{{ $services->title }}</a></li>
								@endforeach
								
							</ul>
						</div>
					</div>
					<div class="sidebar-widget">
						<div class="brochure-download">
							<h4 class="mrb-40 widget-title">Brochure Download</h4>
							<p>Please click download button for getting brochure file</p>
							<a href="{{ url(getBrochure()) }}" class="cs-btn-one" target="_blank"><span class="far fa-file-pdf mrr-10"></span> Download PDF</a>
						</div>
					</div>
					<div class="sidebar-widget bg-primary-color" data-background="images/bg/abs-bg4.png">
						<div class="contact-information">
							<h3 class="text-white mrb-20">Contact Us</h3>
							<p class="text-white">If you have any query about our service please contact with us</p>
							<ul class="list-items text-white mrb-20">
								<li><span class="fas fa-phone alt mrr-10 text-white"></span>{{ getPhone() }}</li>
								<li><span class="fas fa-globe mrr-10 text-white"></span>{{ getAddress() }}</li>
								<li><span class="fas fa-envelope mrr-10 text-white"></span>{{ getEmail() }}</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-lg-7">
					<div class="service-detail-text">
						<div class="blog-standared-img slider-blog mrb-35">
							<img class="img-full" src="{{ url('images/service/'.$service->img) }}" alt="">
						</div>
						<h3 class="mrb-20">{{ $service->title }}</h3>
						<p class="mrb-40">{!! $service->body !!}</p>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Service Details Section End -->

@endsection


