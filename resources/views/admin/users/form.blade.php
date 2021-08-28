<x-input type="text" name="name" value="{{ old('name', isset($item) ? $item->name : null) }}">{{ __('admin.name') }}</x-input>

<x-input type="email" name="email" value="{{ old('email', isset($item) ? $item->email : null) }}">{{ __('admin.email') }}</x-input>

<x-input type="text" name="phone_number" value="{{ old('phone_number', isset($item) ? $item->phone_number : null) }}">{{ __('admin.phone') }}</x-input>

<x-input type="password" name="password">{{ __('admin.password') }}</x-input>

<x-input type="password" name="password_confirmation">{{ __('admin.password-confirmation') }}</x-input>
