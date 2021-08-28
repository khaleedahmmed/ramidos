<div {{ $attributes->merge(['class' => 'form-group']) }}>
    <input type="submit" class="btn btn-primary" value="{{ $slot }}">
    <a href="{{ $redirectRoute }}" class="btn btn-danger"
    >{{ __("admin.cancel") }}</a>
</div>
