<div {{ $attributes->merge(['class' => 'w-100']) }}>
    <label class="form-label-lg mx-3" for="formValidation{{ $label }}">{{ $label }}</label>
    <input type="{{ $type }}" id="formValidation{{ $label }}"
        class="form-control rounded-pill form-control-lg @error($name) is-invalid @enderror" @if($required) required
        @endif placeholder="{{ $placeholder }}" value="{{ old($name) ?? $value }}" name="{{ $name }}" />
    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>