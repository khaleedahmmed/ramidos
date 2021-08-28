@extends('admin.layouts.master')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/forms/switches.css') }}">
<link href="{{ asset('admin-assets/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('title')
{{__('admin.edit')}} {{__('admin.settings')}}

@endsection

@section('content')


<div class="container">
    
      <div class="row layout-px-spacing">
          <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
              <div class="statbox widget box box-shadow">
                  <div class="widget-header">                                
                      <div class="row">
                          <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                              <h4>{{__('admin.edit')}} {{__('admin.settings')}}
                              </h4>
                          </div>                                                                        
                      </div>
                  </div>
                  <div class="widget-content widget-content-area">
                    <form action="{{ route('settings.update',$item) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @include('admin.settings.form')

                      <x-submit redirectRoute="{{ route('settings.index') }}">{{ isset($item) ? __('admin.edit') : __('admin.add') }}</x-submit>
                    </form>
                      <div class="code-section-container show-code">     
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
@endsection
@section('scripts')
<script>
  
  
  function showTax() {
      if ($("#tax_switch").is(":checked")) {
         $('#tax').removeClass('d-none');
         $('#tax').addClass('d-block');
         
      }
      else{
         $('#tax').removeClass('d-block');
         $('#tax').css('display', 'none');
   }
  }

  function showPoint() {
      if ($("#point").is(":checked")) {
         $('#point_value').removeClass('d-none');
         $('#point_value').addClass('d-block');
         
      }
      else{
         $('#point_value').removeClass('d-block');
         $('#point_value').css('display', 'none');
   }
  }
</script>

<script src="{{ asset('admin-assets/plugins/file-upload/file-upload-with-preview.min.js')}}"></script>

<script>
    //First upload
    var firstUpload = new FileUploadWithPreview('myFirstImage')
    //Second upload
    var secondUpload = new FileUploadWithPreview('mySecondImage')
</script>
@endsection