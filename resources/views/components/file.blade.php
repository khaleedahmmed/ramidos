<div {{ $attributes->merge(['class' => 'form-group']) }}>
    @if($label)
        <label for="{{ $name }}">{{ $slot }}</label>
    @endif
    <input type="file" name="{{ $name }}" id="{{ $name }}">

    @error($name)
    <p class="help text-danger">{{ $errors->first($name) }}</p>
    @enderror
</div>
