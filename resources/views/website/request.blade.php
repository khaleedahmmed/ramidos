@extends('website.layouts.master')

@section('title', 'Ramido’s Group Co')


@section('content')
<!-- Contact Section Start -->
<section class="contact-section pdt-110 pdb-95 pdb-lg-90" data-background="images/bg/abs-bg1.png">
	<div class="container">
		<h2 class="mb-2 ">Online Request</h2>
		<div class="row mrb-60">
			<div class="col-lg-12">
				<div class="contact-form">

					<form action="{{ route('send.request') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group mrb-25">
									<input type="text" name="first_name" placeholder="First Name" class="form-control" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group mrb-25">
									<input type="text" name="last_name" placeholder="Last Name" class="form-control" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group mrb-25">
									<input type="text" name="phone" placeholder="Phone" class="form-control" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group mrb-25">
									<input type="email" name="email" placeholder="Email" class="form-control" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group mrb-25">
									<input type="text" name="company" placeholder="Company Name" class="form-control" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group mrb-25">
									<input type="text" name="wieght" placeholder="Wieght" class="form-control" required>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group mrb-25">
									<input type="text" name="volume" placeholder="Volume" class="form-control" required>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group mrb-25">
									<input type="text" name="commodity" placeholder="Commodity" class="form-control" required>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group mrb-25">
									<select name="term" class="custom-select">
										<option value="" disabled selected>Choose term</option>
										@foreach ($terms as $term )
										<option value="{{ $term->title }}">{{ $term->title }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group mrb-25">
									<select name="shipment" class="custom-select">
										<option value="" disabled selected>Shipment by</option>
										@foreach ($shipments as $shipment )
										<option value="{{ $shipment->title }}">{{ $shipment->title }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group mrb-25">
									<select name="origin" class="custom-select">
										<option value="" disabled selected>Origin</option>
										@foreach ($countries as $country )
										<option value="{{ $country->title }}">{{ $country->title }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group mrb-25">
									<select name="destination" class="custom-select">
										<option value="" disabled selected>Destination</option>
										@foreach ($countries as $country )
										<option value="{{ $country->title }}">{{ $country->title }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group mrb-25">
									<textarea rows="4" name="note" placeholder="Note" class="form-control" required></textarea>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="form-group">
									<button type="submit" name="submit" class="cs-btn-one btn-md btn-round btn-primary-color element-shadow" value="Send">Submit Now</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>		
		</div>
	</div>
</section>
<!-- Contact Section End -->

@endsection


