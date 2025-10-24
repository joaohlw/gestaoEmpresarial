@props(['label', 'name', 'type' => 'text'])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label fw-semibold">{{ $label }}</label>

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name) }}"
        class="form-control rounded-pill px-3 @error($name) is-invalid @enderror"
    >

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>





