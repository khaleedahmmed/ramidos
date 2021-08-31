@extends('admin.layouts.master')

@section('title')
{{ __('admin.contacts') }}
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
                <div class="table-responsive mb-4 mt-4">
                    <div>
                        {{-- @include('admin.includes.table-search') --}}

                        <table class="table table-hover" style="width:100%" id="areas-table">
                            <thead>
                            <tr>
                                <th> {{ __('admin.name') }} </th>
                                <th> {{ __('admin.email') }} </th>
                                <th> {{ __('admin.phone') }} </th>
                                <th> {{ __('admin.message') }} </th>
                                <th> {{ __('admin.options') }} </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->message }}</td>
                                    <td>

                                        <button onclick="softDelete({{ $item->id }})" name="delete" class=" table-cancel d-inline-block no-style" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                        <a href="{{ url('admin/contacts/'.$item->id.'/delete') }}"
                                            onclick="return confirm('Are You Sure ?');"
                                            class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <span>{{ $items->links('pagination::bootstrap-4') }}</span>
                    </div>

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


