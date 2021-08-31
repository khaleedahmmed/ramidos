<!-- Footer Area Start -->
<footer class="footer anim-object2">
    <div class="footer-main-area" data-background="images/footer-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="widget footer-widget">
                        <img src="images/logo-footer.png" alt="" class="mrb-20">
                        <address class="mrb-25">
                            <p class="text-light-gray">{{ getAddress() }}</p>
                            <div class="mrb-10"><a href="#" class="text-light-gray"><i class="fas fa-phone-alt mrr-10"></i>{{ getPhone() }}</a></div>
                            <div class="mrb-10"><a href="#" class="text-light-gray"><i class="fas fa-envelope mrr-10"></i>{{ getEmail() }}</a></div>
                        </address>
                        <ul class="social-list">
                            <li><a href="{{ url(getFacebook()) }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ url(getTwitter()) }}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{ url(getInstagram()) }}"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="widget footer-widget">
                                <h5 class="widget-title text-white mrb-30">Services</h5>
                                <ul class="footer-widget-list">
                                    @foreach (getServices() as $service)
                                    <li><a href="{{ url('services/'.$service->id) }}">{{ $service->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="widget footer-widget">
                                <h5 class="widget-title text-white mrb-30">Useful Links</h5>
                                <ul class="footer-widget-list">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/about') }}">About</a></li>
                                    <li><a href="{{ url('/services') }}">Services</a></li>
                                    <li><a href="{{ url('/request') }}">Online request</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact us</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="widget footer-widget">
                        <p class="text-light-gray">Subscribe Now</p>
                        <form action="{{ route('subscribe') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <input name="email" type="text" class="form-control" placeholder="Enter Your Email">
                        @error('email')
                        <div class="alert alert-primary m-4" role="alert">
                            <strong>Ops! You already subscibed</strong> {{ session()->get('error') }}.</button>
                            </div>
                        @enderror
                        <button type="submit" class="cs-btn-one btn-primary-color btn-sm has-icon mrt-20"><i class="webexflaticon flaticon-send"></i>Submit Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container footer-border-top pdt-30 pdb-10">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center">
                        <span class="text-light-gray">Copyright © 2021 by <a class="text-primary-color" target="_blank" href="https://promoclicks.net"> Promo Clicks</a> | All rights reserved </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->