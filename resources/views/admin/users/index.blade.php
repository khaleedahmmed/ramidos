@extends('admin.layouts.master')

@section('title')
{{ __('admin.users') }}
@endsection

@section('styles')
    <link href="{{ asset('admin-assets/plugins/table/datatable/datatables.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin-assets/plugins/table/datatable/dt-global_style.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('admin-assets/plugins/sweetalerts/promise-polyfill.js') }}"></script>
    <link href="{{ asset('admin-assets/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin-assets/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin-assets/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />

    @livewireStyles
@endsection

@section('content')
<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <a href="{{ url('admin/users/create') }}" style="float:right" class="btn btn-primary">{{ __('admin.add') }} {{ __('admin.user') }}</a>   
                <div class="table-responsive mb-4 mt-4">
                    <livewire:table.users/>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection



@section('scripts')
<script src="{{ asset('admin-assets/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/sweetalerts/custom-sweetalert.js') }}"></script>



@livewireScripts
@endsection


