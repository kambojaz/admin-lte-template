<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
	<label for="{{ $name }}">{{ $label }}</label>
    <textarea id="{{ $name }}_{{ time() }}" class="code" name="{{ $name }}">{!! $value !!}</textarea>
	@include(AdminTemplate::view('formitem.errors'))
</div>