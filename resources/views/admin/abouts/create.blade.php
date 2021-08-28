@extends('admin.layouts.master')

@section('title')
{{__('admin.add')}} {{__('admin.about')}}

@endsection

@section('content')


<div class="container">

      <div class="row layout-px-spacing">
          <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
              <div class="statbox widget box box-shadow">
                  <div class="widget-header">
                      <div class="row">
                          <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                              <h4>{{__('admin.add')}} {{__('admin.about')}}
                              </h4>
                          </div>
                      </div>
                  </div>
                  <div class="widget-content widget-content-area">
                    <form action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @include('admin.abouts.form')
                      <x-submit redirectRoute="{{ route('abouts.index') }}">{{ isset($item) ? __('admin.edit') : __('admin.add') }}</x-submit>
                    </form>
                  </div>
              </div>
          </div>
        </div>

      </div>


@endsection

