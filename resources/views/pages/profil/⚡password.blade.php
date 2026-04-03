<?php

use Livewire\Component;

new class extends Component {
    public $title = 'Edit Password';
    public $password, $password_confirmation;

    public function render()
    {
        return $this->view()->title($this->title)->layout('layouts::app');
    }

    public function savePassword()
    {
        // dd($this->all());
        $this->validate([
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
        ]);

        auth()
            ->user()
            ->update([
                'password' => bcrypt($this->password),
            ]);

        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Password updated successfully',
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

            <form wire:submit.prevent="savePassword">
                <!-- Grid -->
                <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">

                    <div class="sm:col-span-3">
                        <label for="af-account-password" class="inline-block text-sm text-foreground mt-2.5">
                            Password
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="space-y-2">
                            <input wire:model="password" id="af-account-password" type="password"
                                class="@error('password') border-red-500 @enderror py-1.5 sm:py-2 px-3 block w-full bg-layer border-layer-line shadow-2xs sm:text-sm rounded-lg text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Enter Password">
                            @error('password')
                                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                            <input wire:model="password_confirmation" type="password"
                                class="@error('password_confirmation') border-red-500 @enderror py-1.5 sm:py-2 px-3 block w-full bg-layer border-layer-line shadow-2xs sm:text-sm rounded-lg text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Enter Confirm Password">
                            @error('password_confirmation')
                                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
                            @enderror
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
