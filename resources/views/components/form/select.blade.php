@props(['nama','label'])
<div>
    <div class="max-w-sm space-y-3 mb-3">
        <div class="relative">
            <select wire:model="{{ $nama }}"
                class="peer p-4 pe-9 block w-full bg-layer border-layer-line rounded-lg text-sm text-foreground focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none
    focus:pt-6
    focus:pb-2
    not-placeholder-shown:pt-6
    not-placeholder-shown:pb-2
    autofill:pt-6
    autofill:pb-2">
                {{ $slot }}
            </select>
            <label
                class="absolute top-0 start-0 p-4 h-full truncate pointer-events-none transition ease-in-out duration-100 border border-transparent text-foreground peer-disabled:opacity-50 peer-disabled:pointer-events-none
      peer-focus:text-xs
      peer-focus:-translate-y-1.5
      peer-focus:text-muted-foreground-1
      peer-not-placeholder-shown:text-xs
      peer-not-placeholder-shown:-translate-y-1.5
      peer-not-placeholder-shown:text-muted-foreground-1">{{ $label }}</label>
        </div>
        @error($nama)
            <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
        @enderror
    </div>
</div>
