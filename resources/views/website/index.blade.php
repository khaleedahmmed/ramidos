@extends('website.layouts.master')

@section('title', 'Ramido’s Group Co')


@section('content')
	<!-- Home Slider Start -->
	<section class="banner-section">
		<div class="home-carousel owl-theme owl-carousel">
			@foreach ($sliders as $slider)
			<div class="slide-item">
				<div class="image-layer" data-background="{{ url('images/bg/'.$slider->img) }}"></div>
				<div class="auto-container">
					<div class="row clearfix">
						<div class="col-xl-12 col-lg-12 col-md-12 content-column">
							<div class="content-box">
								<h1>{{ $slider->title }}</h1>
								<p>{{ $slider->body }}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</section>
	<!-- Home Slider End -->
	<!-- About Title Section Start -->
	<section class="about-section bg-silver-light pdt-110 pdb-100">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xl-6">
					<div class="about-us-wrapper">
						<h6 class="text-primary-color side-line-left mrb-15">{{ $sections[0]->small_title }}</h6>
						<h2>{{ $sections[0]->title }}</h2>
					</div>
				</div>
				<div class="col-md-12 col-xl-6">
					<p class="content-border-left mrt-30">{!! $sections[0]->body !!}</p>
				</div>
			</div>
		</div>
	</section>
	<!-- About Title Section End -->

	<!-- Service Titile Area Start -->

	<section class="bg-primary-color pdt-110 pdb-150">
		<div class="section-title mrb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="section-title-left-part text-xl-right text-left mrb-20 mrb-sm-30">
							<div class="section-left-sub-title mb-20">
								<h5 class="sub-title text-white">{{ $sections[1]->small_title }}</h5>
							</div>
							<h2 class="title text-white">{{ $sections[1]->title }}</h2>
						</div>
					</div>
					<div class="col"></div>
					<div class="col-lg-6">
						<div class="section-title-right-part">
							<p class="text-white">{!! $sections[1]->body !!}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Service Titile Area End -->
	<!-- Service Content Area Start -->
	<section class="service-content-area">
		<div class="section-content">
			<div class="container">
				<div class="row justify-content-center">
					@foreach ($services as $service)
					<div class="col-xl-4 col-lg-6">
						<div class="service-item-box mrt--110 mrb-md-0">
							<div class="service-item-thumb">
								<img class="img-full" src="{{ url('images/service/'.$service->img) }}" alt="">

							</div>
							<div class="service-item-content">
								<div class="service-item-title">
									<h3 class="mrb-15">{{ $service->title }}</h3>
								</div>
								<div class="service-item-para">
									<p>{!! Str::limit($service->body , 65) !!} </p>
								</div>
								<div class="service-item-link">
									<a class="text-uppercase text-primary-color" href="{{ url('services/'.$service->id) }}">Read More</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					{{-- <div class="col-xl-4 col-lg-6">
						<div class="service-item-box mrt--110 mrt-md-30 mrb-lg-60">
							<div class="service-item-thumb">
								<img class="img-full" src="images/service/service2.jpg" alt="">
								<div class="service-item-icon">
									<i class="fas fa-ship"></i>
								</div>
							</div>
							<div class="service-item-content">
								<div class="service-item-title">
									<h3 class="mrb-15">Ocean Freight</h3>
								</div>
								<div class="service-item-para">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est amet similique ipsum reprehenderit sed.</p>
								</div>
								<div class="service-item-link">
									<a class="text-uppercase text-primary-color" href="service-ocean-freight.html">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="service-item-box mrt--110 mrt-lg-30 mrb-lg-60">
							<div class="service-item-thumb">
								<img class="img-full" src="images/service/service3.jpg" alt="">
								<div class="service-item-icon">
									<i class="fas fa-shipping-fast"></i>
								</div>
							</div>
							<div class="service-item-content">
								<div class="service-item-title">
									<h3 class="mrb-15">Road Freight</h3>
								</div>
								<div class="service-item-para">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est amet similique ipsum reprehenderit sed.</p>
								</div>
								<div class="service-item-link">
									<a class="text-uppercase text-primary-color" href="service-road-freight.html">Read More</a>
								</div>
							</div>
						</div>
					</div> --}}
				</div>

			</div>
		</div>
	</section>
	<!-- Service Content Area End -->



	<!-- Divider Section Start -->
	<section class="pdt-90 bg-pos-center-center" data-background="images/bg/3.jpg" data-overlay-dark="6">
		<div class="section-content">
			<div class="container-fluid">
				<div class="row justify-content-start">
					<div class="col-md-12 col-lg-6 col-xl-6">
						<div class="about-image-block-3">
							<img class="left-infinite-img img-full" src="{{ url('/images/sections/'.$sections[2]->img) }}" alt="">
						</div>
					</div>
					<div class="col-md-12 col-lg-6 col-xl-4 p-md-5 pd-sm-25">
						<h5 class="mrb-15 text-white side-line-left">{{ $sections[2]->small_title }}</h5>
						<h2 class="text-white mrb-30">{{ $sections[2]->title }}</h2>
						<p class="text-white mrb-60">{!! $sections[2]->body !!}</p>

					</div>
				</div>
			</div>
		</div>
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
	</section>
	<!-- Divider Section End -->
		<!-- Clients Section Start -->
        <section class="pdb-90">
            
        </section>
        <!-- Clients Section End -->
@endsection


