<div class="mb-6 w-full text-left">
    @if($label)
    <label for="{{ $id }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    @endif

    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $id }}"
        placeholder="{{ $placeholder }}"
        @if($required) required @endif
        @if($disabled) disabled @endif
        class="w-full rounded-md border border-border-primary shadow-sm h-12 p-2">

    @if($error)
    <p class="mt-2 text-sm text-red-600">{{ $error }}</p>
    @else
    @error($name)
    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
    @endif
</div>