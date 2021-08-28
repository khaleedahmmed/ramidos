@extends('website.layouts.master')

@section('title', 'Ramido’s Group Co')


@section('content')
	<!-- Page Title End -->
	<!-- About Section Start -->
	<section class="about-section anim-object pdt-110 pdb-170 pdb-lg-110" data-background="images/bg/abs-bg1.png">
	    @foreach ($abouts as $about )
		<div class="container my-2">
			<div class="row align-items-center">
				<div class="col-md-12 col-xl-6">
					<div class="about-image-box mrr-60 mrr-lg-0 mrb-lg-110">
						{{-- <img class="about-image1 img-full js-tilt d-none d-xl-block" src="images/about/ab2.jpg" alt=""> --}}
						<img class="about-image2 img-full" src="{{ url('images/about/'.$about->img) }}" alt="">
						{{-- <div class="experience"><h4>30+</h4><p>We have more than years of experience</p></div> --}}
					</div>
				</div>
				<div class="col-md-12 col-xl-6 pdl-60">
					<h5 class="side-line-left text-primary-color mrb-15">{{ $about->small_title }}</h5>
					<h2 class="text-uppercase mrb-30">{{ $about->title }}</h2>
					{{-- <ul class="order-list primary-color mrb-40">
						<li>revolutionary catalysts for chang</li>
						<li>catalysts for chang the Seamlessly</li>
						<li>business applications through</li>
						<li>procedures whereas processes</li>
					</ul> --}}
					<p class="mrb-40">{!! $about->body !!}</p>
					{{-- <div class="d-flex align-items-center mt-40">
						<a href="#" class="animate-btn mrr-50">Read More</a>
						<div class="signature">
							<img src="images/about/signature.png" alt="">
						</div>
					</div> --}}
				</div>
			</div>
		</div>	
		@endforeach
		<!-- Clients Section Start -->
		<div class="section-content">
			<div class="container border-top pdt-80">
				<div class="row">
					<div class="col-lg-12">
						<div class="owl-carousel client-items">
							@foreach ($clients as $client )
							<div class="client-item">
								<img src="{{ url('/images/clients/'.$client->img) }}" alt="">
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	  <!-- Clients Section End --> 
	</section>
	 <!-- About Section End -->

@endsection


