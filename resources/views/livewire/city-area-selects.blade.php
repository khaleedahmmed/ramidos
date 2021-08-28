<div>
    <div class='form-group'>
        <label for="city_id">{{ __('admin.city') }}</label>
     
        <select wire:model="city" name="city_id" class="form-control @error("city_id") is-invalid @enderror">
            <option value="">{{ __("admin.choose") }}</option>
            @foreach($cities as $city)
                <option value="{{ $city->id }}"
                @if(isset($address->city_id)) {{ $user_city->id == $city->id ? "selected" : '' }} @endif>{{ $city->name }}</option>
            @endforeach
        </select>
        @error("city_id")
        <p class="help text-danger">{{ $errors->first("city_id") }}</p>
        @enderror
    </div>

    <div class='form-group'>
        <label for="area_id">{{ __('admin.area') }}</label>

        <select name="area_id" class="form-control @error("area_id") is-invalid @enderror">
            <option value="" selected>{{ __("admin.choose") }}</option>
            @foreach($areas as $area)
                <option value="{{ $area->id }}"
                @if(isset($address['area_id'])) {{ $address['area_id'] == $area->id ? "selected" : '' }} @endif>{{ $area->name }}</option>
            @endforeach
        </select>
        @error("area_id")
        <p class="help text-danger">{{ $errors->first("area_id") }}</p>
        @enderror
    </div>
</div>
