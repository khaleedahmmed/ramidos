@extends('admin.layouts.master')

@section('title', 'Admin Dashboard')

@section('styles')
    <link href="{{ asset('admin-assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin-assets/css/adminlte.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('admin-assets/js/loader.js') }}"></script>

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('admin-assets/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin-assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <link href="{{ asset('admin-assets/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/widgets/modules-widgets.css') }}">
    <link href="{{ asset('admin-assets/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin-assets/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin-assets/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />

    @livewireStyles
@endsection

@section('content')
    <livewire:statistics/>

@endsection

@section('scripts')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('admin-assets/plugins/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/dashboard/dash_1.js') }}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('admin-assets/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/sweetalerts/custom-sweetalert.js') }}"></script>
    @livewireScripts
@endsection
