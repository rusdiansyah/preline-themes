<?php

use Livewire\Component;

new class extends Component {
    public $nama;
    public $type;
    public $label;
};
?>

<div>
    <div class="max-w-sm w-full space-y-3 mb-3">
        <div class="relative">
            <input wire:model="{{ $nama }}" type="{{ $type }}" id="hs-floating-input-{{ $nama }}"
                class="@error($nama) border-red-500 @enderror peer border p-4 block w-full bg-layer border-layer-line rounded-lg sm:text-sm text-foreground placeholder:text-transparent focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none
    focus:pt-6
    focus:pb-2
    not-placeholder-shown:pt-6
    not-placeholder-shown:pb-2
    autofill:pt-6
    autofill:pb-2"
                placeholder="Masukan {{ $label }}">
            <label for="hs-floating-input-{{ $nama }}"
                class="absolute top-0 start-0 p-4 h-full sm:text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent text-foreground origin-[0_0] peer-disabled:opacity-50 peer-disabled:pointer-events-none
      peer-focus:scale-90
      peer-focus:translate-x-0.5
      peer-focus:-translate-y-1.5
      peer-focus:text-muted-foreground-1
      peer-not-placeholder-shown:scale-90
      peer-not-placeholder-shown:translate-x-0.5
      peer-not-placeholder-shown:-translate-y-1.5
      peer-not-placeholder-shown:text-muted-foreground-1">{{ $label }}</label>
        </div>
        @error($nama)
            <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
        @enderror
    </div>
</div>
