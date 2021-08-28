@section('styles')
<link href="{{ asset('admin-assets/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/plugins/select2/select2.min.css') }}">
<link href="{{ asset('admin-assets/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
<div class="form-group mb-3">
    <x-input type="text" name="name" value="{{ isset($item) ? $item->name : null }}">{{ __('admin.name') }}</x-input>
<label>{{ __('admin.image')}}</label>
<div class="custom-file-container" data-upload-id="myFirstImage">
        <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a>
        <label class="custom-file-container__custom-file" >
            <input name="img" type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
            <span class="custom-file-container__custom-file__custom-file-control"></span>
        </label>
        <div class="custom-file-container__image-preview"></div>
</div>
    @if(isset($item))
    <div class="m-2">
        <img width="100px"  src=" {{ isset($item->img) ? url("/images/clients/".$item->img) : null }}">
        </div>
    @endif
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
