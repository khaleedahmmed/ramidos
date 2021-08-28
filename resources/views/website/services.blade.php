@extends('website.layouts.master')

@section('title', 'Ramido’s Group Co')


@section('content')
	<!-- Page Title End -->
	<!-- About Section Start -->
<!-- Service Content Area Start -->
<section class="service-content-area pdt-110 pdb-80">
	<div class="section-content">
		<div class="container">
			<div class="row justify-content-center">
				@foreach ($services as $service)
				<div class="col-xl-4 col-lg-6">
					<div class="service-item-box mrb-30">
						<div class="service-item-thumb">
							<img class="img-full" src="{{ url('images/service/'.$service->img) }}" alt="">
							{{-- <div class="service-item-icon">
								<i class="fas fa-plane-departure"></i>
							</div> --}}
						</div>
						<div class="service-item-content">
							<div class="service-item-title">
								<h3 class="mrb-15">{{ $service->title }}</h3>
							</div>
							<div class="service-item-para">
								<p>{!! Str::limit($service->body , 65) !!}</p>
							</div>
							<div class="service-item-link">
								<a class="text-uppercase text-primary-color" href="{{ url('services/'.$service->id) }}">Read More</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>
	</div>
<!-- Service Content Area End -->	   
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


