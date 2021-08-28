<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href=""/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Promo CC</title>
 <!-- BEGIN GLOBAL MANDATORY STYLES -->
 <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
 <link href="{{ asset('admin-assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('admin-assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

 <!-- END GLOBAL MANDATORY STYLES -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{asset('admin-assets/css/main.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-assets/css/authentication/form-2.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/switches.css')}}">
    <style>
        .form-form .form-form-wrap form .field-wrapper svg.feather-eye {
            top: 46px;
        }
    </style>
</head>
<body class="form">
       
            @yield('content')
       
</body>
 <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('admin-assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script src="{{ asset('admin-assets/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('admin-assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/app.js') }}"></script>


<script src="{{ asset('admin-assets/js/custom.js') }}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

  <script src="{{ asset('admin-assets/js/authentication/form-2.js')}}"></script>
</html>
