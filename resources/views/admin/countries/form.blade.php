@section('styles')
<link href="{{ asset('admin-assets/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/plugins/select2/select2.min.css') }}">
<link href="{{ asset('admin-assets/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
<div class="form-group mb-3">
    <x-input type="text" name="title" value="{{ isset($item) ? $item->title : null }}">{{ __('admin.title') }}</x-input>
</div>
 @section('scripts')
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
