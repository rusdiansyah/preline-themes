<?php

use Livewire\Component;

new class extends Component {
    public $title='Blank Page';
};
?>

<div>
    <div class="flex flex-col gap-y-2">
        <div class="bg-red-500 text-sm text-foreground-inverse rounded-lg p-4" role="alert" tabindex="-1"
            aria-labelledby="hs-solid-color-danger-label">
            <span id="hs-solid-color-danger-label" class="font-bold">Danger</span> {{ $title }}
        </div>
    </div>

</div>
