<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href=""/>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('admin-assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin-assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    @yield('styles')
</head>
<body>

@include('admin.includes.nav')


<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    @include('admin.includes.sidebar')

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        @if(session()->has('success'))
            <div class="alert alert-success m-4" role="alert">
{{--                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg> ... </svg></button>--}}
                <strong>Success!</strong> {{ session()->get('success') }}.</button>
            </div>
        @endif

        @yield('content')

        @include('admin.includes.footer')
    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('admin-assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script src="{{ asset('admin-assets/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('admin-assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{ asset('admin-assets/js/custom.js') }}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

@yield('scripts')
@include('admin.includes.alert')
</body>
</html>
