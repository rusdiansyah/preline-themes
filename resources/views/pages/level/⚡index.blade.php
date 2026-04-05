<?php

use Livewire\Component;
use App\Models\LevelUser;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Attributes\On;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;

    #[Url(as: 'q')]
    public $search = '';
    public $perPage = 10;

    public $title = 'Level User';
    public $id, $name;

    #[Url]
    public $sort = 'name';

    #[Computed]
    public function data()
    {
        return LevelUser::query()->when($this->search, fn($q) => $q->where('name', 'like', "%{$this->search}%"))->orderBy($this->sort)->paginate($this->perPage);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function viewAll()
    {
        $this->perPage=null;
    }

    public function render()
    {
        return $this->view()->layout('layouts::app');
    }

    public function add()
    {
        $this->reset(['id', 'name']);
    }

    public function edit($id)
    {
        $item = LevelUser::findOrFail($id);
        $this->id = $item->id;
        $this->name = $item->name;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:3|unique:level_users,name,' . $this->id,
        ]);

        // Simpan data ke database
        LevelUser::create(['name' => $this->name]);

        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Data berhasil disimpan',
            'icon' => 'success',
        ]);

        $this->add();
    }


    public function cofirmDelete($id)
    {
        $this->dispatch('confirm', id: $id);
    }

    #[On('delete')]
    public function delete($id)
    {
        $item = LevelUser::findOrFail($id);
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
    <x-table.create title="{{ $title }}">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
            <thead class="bg-gray-50 dark:bg-neutral-800">
                <tr>
                    <x-table.th title="#" />
                    <x-table.th title="Name" />
                    <th scope="col" class="px-6 py-3 text-end"></th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                @foreach ($this->data as $item)
                    <tr class="odd:bg-layer even:bg-surface hover:bg-muted-hover dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-600">
                        <x-table.td>{{ $this->data->firstItem() + $loop->index }}</x-table.td>
                        <x-table.td>{{ $item->name }}</x-table.td>
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
</div>
</x-table.create>


<x-canvas-card title="Create {{ $title }}" id="hs-create">
    <form wire:submit.prevent="store">
        <x-form.input nama="name" type="text" label="Name" />
        <x-button.save type="submit" />
    </form>
</x-canvas-card>

<x-canvas-no-bacdrop title="Filter {{ $title }}" />

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
