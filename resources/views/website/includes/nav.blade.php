	<!-- header Start -->
	<header class="header-style-two">
		<div class="header-wrapper">
			<div class="header-top-area bg-primary-color d-none d-lg-block">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 header-top-left-part">
							<span class="address"><i class="webexflaticon flaticon-placeholder-1"></i> {{ getAddress() }}</span>
							<span class="phone"><i class="webexflaticon flaticon-send"></i> {{ getEmail() }}</span>
						</div>
						<div class="col-lg-6 header-top-right-part text-right">
							<ul class="social-links">
								<li><a href="{{ url(getFacebook()) }}"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="{{ url(getTwitter()) }}"><i class="fab fa-twitter"></i></a></li>
								<li><a href="{{ url(getInstagram()) }}"><i class="fab fa-instagram"></i></a></li>
								
							</ul>

						</div>
					</div>
				</div>
			</div>
			<div class="header-navigation-area two-layers-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<a class="navbar-brand logo f-left mrt-10 mrt-md-0" href="{{ url('/') }}">
								<img id="logo-image" class="img-center" src="{{ url(getLogo()) }}" alt="">
							</a>
							<div class="mobile-menu-right"></div>
							<div class="header-searchbox-style-two d-none d-xl-block">
								<div class="side-panel side-panel-trigger text-right d-none d-lg-block">
									<span class="bar1"></span>
									<span class="bar2"></span>
									<span class="bar3"></span>
								</div>
								
							</div>
							<div class="side-panel-content">
								<div class="close-icon">
									<button><i class="webex-icon-cross"></i></button>
								</div>
								<div class="side-panel-logo mrb-30">
									<a href="{{ url('/') }}">
										<img src="{{ url(getLogo()) }}" alt="" />
									</a>
								</div>
								<div class="side-info mrb-30">
									<div class="side-panel-element mrb-25">
										<h4 class="mrb-10">Office Address</h4>
										<ul class="list-items">
											<li><span class="fa fa-map-marker-alt mrr-10 text-primary-color"></span>{{ getAddress() }}</li>
											<li><span class="fas fa-envelope mrr-10 text-primary-color"></span>{{ getEmail() }}</li>
											<li><span class="fas fa-phone-alt mrr-10 text-primary-color"></span>{{ getPhone() }}</li>
											<li><span class="fas fa-phone-alt mrr-10 text-primary-color"></span>{{ getLandline() }}</li>
											<li><span class="fas fa-phone-alt mrr-10 text-primary-color"></span>{{ getFax() }}</li>
										</ul>
									</div>
								</div>
								<h4 class="mrb-15">Social List</h4>
								<ul class="social-list">
									<li><a href="{{ url(getFacebook()) }}"><i class="fab fa-facebook"></i></a></li>
									<li><a href="{{ url(getTwitter()) }}"><i class="fab fa-twitter"></i></a></li>
									<li><a href="{{ url(getInstagram()) }}"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
							<div class="main-menu f-right">
								<nav id="mobile-menu-right">
									<ul>
										<li><a href="{{ url('/') }}">Home</a></li>
										<li><a href="{{ url('/about') }}">About</a></li>
										<li class="has-sub">
											<a href="#">Services</a>
											<ul class="sub-menu">
												<li><a href="{{ url('/services') }}">All Services</a></li>	
												@foreach (getServices() as $service)
												<li><a href="{{ url('services/'.$service->id) }}">{{ $service->title }}</a></li>	
												@endforeach
											</ul>
										</li>
										<li><a href="{{ url('/request') }}">Online request</a></li>
										<li><a href="{{ url('/contact') }}">Contact us</a></li>

									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header End -->