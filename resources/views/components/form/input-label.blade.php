@props(['label','name','type' => 'text'])
<div class="mb-4 sm:mb-8">
    <label for="hs-{{ $name }}" class="block mb-2 text-sm font-medium text-foreground">{{ $label }}</label>
    <input type="{{ $type }}" id="hs-{{ $name }}"
        class="py-2.5 sm:py-3 px-4 block w-full bg-layer border-layer-line rounded-lg sm:text-sm text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none"
        placeholder="Input {{ $label }}">
    @error($name)
        <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
    @enderror
</div>
