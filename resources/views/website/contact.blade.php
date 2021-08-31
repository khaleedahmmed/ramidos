@extends('website.layouts.master')

@section('title', 'Ramido’s Group Co')


@section('content')
<!-- Contact Section Start -->
<section class="contact-section pdt-110 pdb-95 pdb-lg-90" data-background="images/bg/abs-bg1.png">
	<div class="container">
		<div class="row mrb-60">
			<div class="col-lg-7">
				<div class="contact-form">
					<form action="{{ route('contact.request') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group mrb-25">
									<input type="text" name="name" placeholder="Name" class="form-control" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group mrb-25">
									<input type="text" name="phone" placeholder="Phone" class="form-control" required>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group mrb-25">
									<input type="email" name="email" placeholder="Email" class="form-control" required>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group mrb-25">
									<textarea rows="4" name="message" placeholder="Messages" class="form-control" required></textarea>
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

			<div class="col-lg-5">
				<!-- Google Map Start -->
				<div class="mapouter fixed-height">
					<div class="gmap_canvas">
						
						<iframe id="gmap_canvas" src="{{ getMap() }}"></iframe>
						{{-- <a href="https://www.whatismyip-address.com"></a> --}}
					</div>
				</div>
				<!-- Google Map End -->
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-xl-4">
				<div class="contact-block d-flex mrb-30">
					<div class="contact-icon">
						<i class="webex-icon-map1"></i>
					</div>
					<div class="contact-details mrl-30">
						<h5 class="icon-box-title mrb-10">Our Address</h5>
						<p class="mrb-0">{{ getAddress() }}</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-xl-4">
				<div class="contact-block d-flex mrb-30">
					<div class="contact-icon">
						<i class="webex-icon-Phone2"></i>
					</div>
					<div class="contact-details mrl-30">
						<h5 class="icon-box-title mrb-10">Phone Number</h5>
						<p class="mrb-0">{{ getPhone() }}</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-xl-4">
				<div class="contact-block d-flex mrb-30">
					<div class="contact-icon">
						<i class="webex-icon-envelope"></i>
					</div>
					<div class="contact-details mrl-30">
						<h5 class="icon-box-title mrb-10">Email Us</h5>
						<p class="mrb-0">{{ getEmail() }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Contact Section End -->

@endsection


