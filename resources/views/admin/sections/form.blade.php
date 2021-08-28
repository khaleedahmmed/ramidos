
  
   <div class="form-group mb-3">
      
      <x-input type="text" name="name" value="{{ isset($item) ? $item->name : null }}">{{ __('admin.name') }}</x-input>
      <x-input class="d-none" type="number" name="count" id="count" value="{{ isset($item) ? $item->count : null }}">{{ __('admin.count') }}</x-input>
     
      <label class="" >{{ __('admin.logo') }}</label>
      <div class="custom-file-container" data-upload-id="myFirstImage">
         <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a>
         <label class="custom-file-container__custom-file" >
             <input name="logo" type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
             <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
             <span class="custom-file-container__custom-file__custom-file-control"></span>
         </label>
         <div class="m-2">
         <img width="100px"  src=" {{ isset($item->logo) ? url("/uploads/settings/".$item->logo) : null }}">
         </div>
         <div class="custom-file-container__image-preview"></div>
     </div>

      <label class="" >{{ __('admin.tax_or_not') }}</label>
      <div class ="form-group">
         <label class="switch s-icons s-outline  s-outline-primary  mb-4 mr-2">
         <input value="1" type="checkbox" name="tax_switch" id="tax_switch" onclick="showTax()"
         {{ $item->tax == 0 ? '' : 'checked' }}>
         <span class="slider round"></span>
        </label>
        <x-input class="{{ $item->tax != 0 ? 'd-block' : 'd-none' }}" type="number" name="tax" id="tax" value="{{ isset($item) ? $item->tax : null }}">{{ __('admin.tax_precentage') }}</x-input>
      </div>

      <label class="" >{{ __('admin.points') }}</label>
      <div class ="form-group">
         <label class="switch s-icons s-outline  s-outline-primary  mb-4 mr-2">
         <input value="1" type="checkbox" name="point" id="point" onclick="showPoint()"
         {{ $item->point == 1 ? 'checked' : '' }}>
         <span class="slider round"></span>
        </label>
        <x-input class=" {{ $item->point == 1 ? 'd-block' : 'd-none' }}" type="number" name="point_value" id="point_value" value="{{ isset($item) ? $item->point_value : null }}">{{ __('admin.points-for-100') }}</x-input>
      </div>

   </div>
