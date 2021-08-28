@extends('admin.layouts.master')

@section('title')
{{__('admin.edit')}} {{__('admin.settings')}}

@endsection
@section('styles')
<link href="{{ asset('admin-assets/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/plugins/select2/select2.min.css') }}">
<link href="{{ asset('admin-assets/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />

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
<script src="{{asset('admin-assets/ckeditor/ckeditor.js') }}"></script>

   <script>
         CKEDITOR.replace( 'body' );
   </script>
<script src="{{ asset('admin-assets/assets/js/scrollspyNav.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/select2/custom-select2.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/file-upload/file-upload-with-preview.min.js')}}"></script>

<script>
   //First upload
   var firstUpload = new FileUploadWithPreview('myFirstImage')
   //Second upload
   var secondUpload = new FileUploadWithPreview('mySecondImage')
</script>
<!-- END PAGE LEVEL PLUGINS -->
<script>
function showSizes(key) {
   if ($("#size"+key).is(":checked")) {
      $('#price'+key).removeClass('d-none');
      $('#price'+key).addClass('d-block');

   }
   else{
      $('#price'+key).removeClass('d-block');
      $('#price'+key).css('display', 'none');
}
}
</script>
@endsection