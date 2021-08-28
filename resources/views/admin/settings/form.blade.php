
  
   <div class="form-group mb-3">
           
      <label class="" >{{ __('admin.logo') }}</label>
      <div class="custom-file-container" data-upload-id="myFirstImage">
         <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a>
         <label class="custom-file-container__custom-file" >
             <input name="logo" type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
             <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
             <span class="custom-file-container__custom-file__custom-file-control"></span>
         </label>
         <div class="m-2">
         <img width="100px"  src=" {{ isset($item->logo) ? url("/images/settings/".$item->logo) : null }}">
         </div>
         <div class="custom-file-container__image-preview"></div>
     </div>
     <x-input type="text" name="address" value="{{ isset($item) ? $item->address : null }}">{{ __('admin.address') }}</x-input>
     <x-input type="text" name="map" value="{{ isset($item) ? $item->map : null }}">{{ __('admin.map') }}</x-input>
     <x-input type="email" name="email" value="{{ isset($item) ? $item->email : null }}">{{ __('admin.email') }}</x-input>
     <x-input type="text" name="phone" value="{{ isset($item) ? $item->phone : null }}">{{ __('admin.phone') }}</x-input>
     <x-input type="text" name="landline" value="{{ isset($item) ? $item->landline : null }}">{{ __('admin.landline') }}</x-input>
     <x-input type="text" name="fax" value="{{ isset($item) ? $item->fax : null }}">{{ __('admin.fax') }}</x-input>
     <x-input type="text" name="facebook" value="{{ isset($item) ? $item->facebook : null }}">{{ __('admin.facebook') }}</x-input>
     <x-input type="text" name="twitter" value="{{ isset($item) ? $item->twitter : null }}">{{ __('admin.twitter') }}</x-input>
     <x-input type="text" name="instagram" value="{{ isset($item) ? $item->instagram : null }}">{{ __('admin.instagram') }}</x-input>

   </div>
