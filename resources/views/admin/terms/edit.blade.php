@extends('admin.layouts.master')

@section('title')
{{__('admin.edit')}} {{__('admin.terms')}}

@endsection

@section('content')


<div class="container">

      <div class="row layout-px-spacing">
          <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
              <div class="statbox widget box box-shadow">
                  <div class="widget-header">
                      <div class="row">
                          <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                              <h4>{{__('admin.edit')}} {{__('admin.terms')}}
                              </h4>
                          </div>
                      </div>
                  </div>
                  <div class="widget-content widget-content-area">
                    <form action="{{ route('terms.update',$item) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('put')
                      @include('admin.terms.form')

                      <x-submit redirectRoute="{{ route('terms.index') }}">{{ isset($item) ? __('admin.edit') : __('admin.add') }}</x-submit>
                    </form>
                      <div class="code-section-container show-code">
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
@endsection
