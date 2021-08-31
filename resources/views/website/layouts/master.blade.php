<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="Logistek">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Logistek Logistics & Transportation HTML5 Template">
	<meta name="keywords" content="cargo, corporate, delivery company, logistic, logistics, moving, packaging, shipment, shipping, storage, transport, transportation, warehouse" />
	<title>Ramido’s Group Co</title>
	<link href="{{ asset('images/favicon.png')}}" rel="shortcut icon" type="image/png">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
</head>

<body>
    <div class="preloader"></div>
        @include('website.includes.nav')
        @if(session()->has('success'))
        <div class="alert alert-success m-4" role="alert">
{{--                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg> ... </svg></button>--}}
            <strong>Success!</strong> {{ session()->get('success') }}.</button>
        </div>
        @elseif (session()->has('error'))
        <div class="alert alert-danger m-4" role="alert">
        <strong>Ops!</strong> {{ session()->get('error') }}.</button>
        </div>
    @endif
        @yield('content')

        @include('website.includes.footer')

        <div class="back-to-top bg-primary-color">
            <i class="fab fa-angle-up"></i>
        </div>
        <!-- Integrated important scripts here -->
        <script src="{{ asset('assets/js/jquery.v1.12.4.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery-core-plugins.js')}}"></script>
        <script src="{{ asset('assets/js/main.js')}}"></script>
   
@yield('scripts')

</body>
</html>
