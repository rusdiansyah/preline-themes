<?php

use Livewire\Component;

new class extends Component
{
    public $title = 'Home';

    public function render()
    {
        return $this->view()->title($this->title)->layout('layouts::front');
    }
};
?>

<div>
    {{-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama --}}
</div>
