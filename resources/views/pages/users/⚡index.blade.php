<?php

use Livewire\Component;
use App\Models\LevelUser;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Attributes\On;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;

    #[Url(as: 'q')]
    public $search = '';
    public $perPage = 10;
    #[Url]
    public $sort = 'name';

    public $title = 'Users';
    public $id, $name, $email, $level_user_id, $password, $password_confirmation;
    public $isStatus;

    public $filter_level_user_id;

    #[Computed]
    public function listLevel()
    {
        return LevelUser::all();
    }

    #[Computed]
    public function data()
    {
        return User::query()->when($this->search, fn($q) => $q->where('name', 'like', "%{$this->search}%"))
        ->when($this->filter_level_user_id, fn($q) => $q->where('level_users_id', $this->filter_level_user_id))
        ->orderBy($this->sort)
        ->paginate($this->perPage);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return $this->view()->layout('layouts::app');
    }

    public function viewAll()
    {
        $this->reset(['search', 'filter_level_user_id']);
        $this->perPage=100;
    }

    public function filter()
    {
        $this->data;
    }

    public function resetFilter()
    {
        $this->reset(['filter_level_user_id']);
    }

    public function add()
    {
        $this->reset(['id', 'name', 'email', 'level_user_id', 'password', 'password_confirmation']);
        $this->isStatus = true;
        $this->title = 'Tambah User';
    }

    public function edit($id)
    {
        $item = User::findOrFail($id);
        $this->isStatus = false;
        $this->id = $item->id;
        $this->name = $item->name;
        $this->email = $item->email;
        $this->level_user_id = $item->level_users_id;
        $this->title = 'Edit User';
    }

    public function store()
    {
        // dd($this->all());
        if ($this->isStatus == true) {
            $this->validate([
                'name' => 'required|min:3',
                'email' => 'required|email|unique:users,email,' . $this->id,
                'password' => 'required|confirmed|min:6',
                'password_confirmation' => 'required|min:6',
                'level_user_id' => 'required',
            ]);
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt($this->password),
                'level_users_id' => $this->level_user_id,
            ]);
            $this->dispatch('swal', [
                'title' => 'Success!',
                'text' => 'Data berhasil disimpan',
                'icon' => 'success',
            ]);
        } else {
            // dd($this->all());
            if ($this->password) {
                $this->validate([
                    'name' => 'required|min:3',
                    'email' => 'required|email',
                    'password' => 'required|confirmed|min:6',
                    'password_confirmation' => 'required',
                    'level_user_id' => 'required',
                ]);
                User::where('id', $this->id)->update([
                    'name' => $this->name,
                    'email' => $this->email,
                    'level_users_id' => $this->level_user_id,
                    'password' => Hash::make($this->password),
                ]);
                $this->dispatch('swal', [
                    'title' => 'Success!',
                    'text' => 'Data berhasil diedit',
                    'icon' => 'success',
                ]);
            } else {
                $this->validate([
                    'name' => 'required|min:3',
                    'email' => 'required|email',
                    'level_user_id' => 'required',
                ]);
                User::where('id', $this->id)->update([
                    'name' => $this->name,
                    'email' => $this->email,
                    'level_users_id' => $this->level_user_id,
                ]);
                $this->dispatch('swal', [
                    'title' => 'Success!',
                    'text' => 'Data berhasil diedit',
                    'icon' => 'success',
                ]);
            }
        }
    }

    public function cofirmDelete($id)
    {
        $this->dispatch('confirm', id: $id);
    }

    #[On('delete')]
    public function delete($id)
    {
        $item = User::findOrFail($id);
        $item->delete();

        $this->dispatch('swal', [
            'title' => 'Deleted!',
            'text' => 'Data berhasil dihapus',
            'icon' => 'success',
        ]);
    }
};
?>

<div>
    <x-table.create title="User">
        <table class="min-w-full table-auto divide-y divide-gray-200 dark:divide-neutral-700">
            <thead class="bg-gray-50 dark:bg-neutral-800">
                <tr>
                    <x-table.th-check />
                    <x-table.th title="Name" />
                    <x-table.th title="Email" />
                    <x-table.th title="Level" />
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                @foreach ($this->data as $item)
                    <tr class="odd:bg-layer even:bg-surface hover:bg-muted-hover dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-600">
                        <x-table.td-check id="{{ $item->id }}" />
                        <x-table.td>{{ $item->name }}</x-table.td>
                        <x-table.td>{{ $item->email }}</x-table.td>
                        <x-table.td>{{ optional($item->level)->name }}</x-table.td>
                        <x-table.td>
                            <x-button.edit id="{{ $item->id }}" />
                            <x-button.hapus id="{{ $item->id }}" />
                        </x-table.td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Footer -->
        <div
            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
            <div>
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                    <span class="font-semibold text-gray-800 dark:text-neutral-200">{{ $this->data->count() }}</span>
                    results
                </p>
            </div>

            <div>
                <div class="inline-flex gap-x-2">
                    {{ $this->data->links() }}
                </div>
            </div>
        </div>
        <!-- End Footer -->
    </x-table.create>

    <x-canvas-card title="{{ $title }}" id="hs-create">
        <form wire:submit.prevent="store">
            <x-form.input nama="name" type="text" label="Name" />
            <x-form.input nama="email" type="email" label="Email" />
            <x-form.input nama="password" type="password" label="Password" />
            <x-form.input nama="password_confirmation" type="password" label="Confirm Password" />
            <x-form.select nama="level_user_id" label="Level">
                <option value="">Select Level</option>
                @foreach ($this->listLevel() as $level)
                    <option value="{{ $level->id }}">{{ $level->name }}</option>
                @endforeach
            </x-form.select>

            <x-button.save type="submit" />
        </form>
    </x-canvas-card>

    <x-canvas-no-bacdrop title="Filter" id="hs-filter">
        <form wire:submit.prevent="filter">
            <x-form.select nama="filter_level_user_id" label="Level">
                <option value="">Select All</option>
                @foreach ($this->listLevel() as $level)
                    <option value="{{ $level->id }}">{{ $level->name }}</option>
                @endforeach
            </x-form.select>
            <x-button.filter type="submit" />
        </form>
    </x-canvas-no-bacdrop>


</div>
@script
    <script>
        $wire.on("confirm", (event) => {
            Swal.fire({
                title: "Yakin dihapus?",
                text: "Anda tidak dapat mengembalikannya!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $wire.dispatch("delete", {
                        id: event.id
                    });
                }
            });
        });
    </script>
@endscript
