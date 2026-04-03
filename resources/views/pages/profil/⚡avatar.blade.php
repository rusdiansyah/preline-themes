<?php

use Livewire\Component;
use Livewire\WithFileUploads;

new class extends Component
{
    use WithFileUploads;
    public $title ='Edit Avatar';
    public $avatar;

    public function mount()
    {
        $this->avatar = auth()->user()->avatar;
    }

    public function save()
    {
        $this->validate([
            'avatar' => 'required|image|max:2048', // Validasi file gambar dengan ukuran maksimal 2MB
        ]);

        // Simpan file avatar ke storage (misalnya di folder 'public/avatars')
        $path = $this->avatar->store('public/avatars');

        // Update path avatar di database (misalnya di tabel users)
        auth()->user()->update([
            'avatar' => $path,
        ]);

        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Avatar updated successfully',
            'icon' => 'success',
        ]);
    }
};
?>

<div>
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 mx-auto"><!-- Card -->
        <div class="bg-layer rounded-xl shadow-xs p-4 sm:p-7">
            <div class="mb-8">
                <h2 class="text-xl font-bold text-foreground">
                    {{ $title }}
                </h2>
            </div>

            <form wire:submit.prevent="save">
                <!-- Grid -->
                <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
                    <div class="sm:col-span-3">
                        <label class="inline-block text-sm text-foreground mt-2.5">
                            Profile photo
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="flex items-center gap-5">
                            @if ($avatar)
                            <img class="inline-block size-16 rounded-full ring-2 ring-layer"
                                src="{{ Storage::url($avatar) }}" alt="Avatar">
                            @else
                            <img class="inline-block size-16 rounded-full ring-2 ring-layer"
                                src="https://preline.co/assets/img/160x160/img1.jpg" alt="Avatar">
                            @endif

                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="af-account-full-name" class="inline-block text-sm text-foreground mt-2.5">
                            Edit Avatar
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="sm:flex">
                            <input id="af-avatar" type="file" wire:model="avatar"
                                class="py-1.5 sm:py-2 px-3 block w-full bg-layer border-layer-line text-foreground placeholder:text-muted-foreground-1 shadow-2xs -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg sm:text-sm relative focus:z-10 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                                value="{{ $avatar }}" placeholder="{{ $avatar }}">

                        </div>
                    </div>

                </div>

                <div class="mt-5 flex justify-end gap-x-2">
                    <button type="submit"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-primary border border-primary-line text-primary-foreground hover:bg-primary-hover focus:outline-hidden focus:bg-primary-focus disabled:opacity-50 disabled:pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-check2-circle" viewBox="0 0 16 16">
                            <path
                                d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                            <path
                                d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                        </svg>
                        Update
                    </button>
                </div>
            </form>
        </div>
        <!-- End Card -->
    </div>
</div>
