<?php

use Livewire\Component;
use App\Models\User;
use App\Models\LevelUser;

new class extends Component {

    public $title = 'Dashboard';
    public $data = [];

    public function mount()
    {
        $this->data = [
            'levelUser' => [
                'count' => LevelUser::count(),
                'icon' => '',
                'route' => 'users.level'
            ],
            'users' => [
                'count' => User::count(),
                'icon' => '',
                'route' => 'users.user'
            ],
        ];
    }

    public function render()
    {
        return $this->view()->layout('layouts::app');
    }
};
?>

<div>
    <!-- Card Section -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            <x-card-count title="users" count="{{ $data['users']['count'] }}" icon="{{ $data['users']['icon'] }}" route="{{ $data['users']['route'] }}" />
            <x-card-count title="level users" count="{{ $data['levelUser']['count'] }}" icon="{{ $data['levelUser']['icon'] }}" route="{{ $data['levelUser']['route'] }}" />
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Section -->

</div>
