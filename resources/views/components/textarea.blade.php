<div {{ $attributes->merge(['class' => 'w-100']) }}>
    <label class="form-label-lg" for="formValidation{{ $label }}">{{ $label }}</label>
    <textarea class="form-control form-control-lg" id="formValidation{{ $label }}" rows="3"
        placeholder="{{ $placeholder }}" name="{{ $name }}">{{ old($name) ?? $value }}</textarea>
</div>