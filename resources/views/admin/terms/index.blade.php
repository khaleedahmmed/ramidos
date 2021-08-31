@extends('admin.layouts.master')

@section('title')
{{ __('admin.terms') }}
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
                <a href="{{ url('admin/terms/create') }}" style="float:right" class="btn btn-primary">{{ __('admin.add') }} {{ __('admin.terms') }}</a>
                <div class="table-responsive mb-4 mt-4">
                    <div>
                        {{-- @include('admin.includes.table-search') --}}

                        <table class="table table-hover" style="width:100%" id="areas-table">
                            <thead>
                            <tr>
                                <th> {{ __('admin.title') }} </th>
                                <th> {{ __('admin.options') }} </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-lg-1">
                                             <a href="{{ route('terms.edit', $item) }}"
                                             class="d-inline-block" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit table-edit"></i></a>
                                            </div>
                                            <div class="col-lg-1">
                                             <form action="{{route('terms.destroy',$item)}}" method="post">
                                                 @csrf
                                                 @method("delete")
                                                 <button type="submit" name="delete" onclick="return confirm('Are You Sure ?');" class="table-cancel d-inline-block no-style"><i class="fa fa-trash"></i></button>
                                             </form>
                                            </div>
                                        </div>
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


