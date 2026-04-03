<?php

use Livewire\Component;

new class extends Component
{
    public $title = 'Menus';
    public $level;
    public function mount()
    {
        $this->level = auth()->user()->level->name;
    }

};
?>

<div>
    @if (strtolower($level)=='admin')
        <livewire:layouts.sidebar />
    @elseif (strtolower($level)=='user')
        <livewire:layouts.sidebar-user />
    @else
    @endif
</div>
