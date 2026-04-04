@props(['id', 'title'])
<div>
    <div wire:ignore.self id="{{ $id }}"
        class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-sm w-full z-80 bg-overlay border-e border-overlay-line"
        role="dialog" tabindex="-1" aria-labelledby="{{ $id }}-label">
        <div class="flex justify-between items-center py-3 px-4 border-b border-overlay-header">
            <h3 id="{{ $id }}-label" class="font-semibold text-foreground">
                {{ $title }}
            </h3>
            <button type="button"
                class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full bg-surface border border-surface-line text-surface-foreground hover:bg-surface-hover focus:outline-hidden focus:bg-surface-focus disabled:opacity-50 disabled:pointer-events-none"
                aria-label="Close" data-hs-overlay="#{{ $id }}">
                <span class="sr-only">Close</span>
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
        </div>
        <div class="p-4">
            {{ $slot }}
        </div>
    </div>
</div>
