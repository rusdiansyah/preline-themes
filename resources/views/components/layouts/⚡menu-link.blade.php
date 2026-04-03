<?php

use Livewire\Component;

new class extends Component {
    public $route;
    public $title;
    public $icon=null;
};
?>

<div>
    <li>
        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm {{ Route::is($route) ? 'bg-gray-100 dark:bg-neutral-700' : '' }} text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
            wire:navigate href="{{ route($route) }}">
            @if ($icon)
                {!! $icon !!}
            @endif
            {{ $title }}
        </a>
    </li>
</div>
