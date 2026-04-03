<?php

use Livewire\Component;

new class extends Component {
    public $title = 'Profil';
    public $active = 'profil';
    public function render()
    {
        return $this->view()->layout('layouts::app');
    }
};
?>

<div>
    <!-- Tab Nav -->
    <div class="border-b border-gray-200 dark:border-neutral-700">
        <nav id="hs-tabs" class="flex gap-x-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
            <button type="button"
                class="hs-tab-active:font-semibold hs-tab-active:text-blue-700 dark:hs-tab-active:text-blue-600 hs-tab-active:after:bg-blue-700 dark:hs-tab-active:after:bg-blue-600 relative py-4 px-1 inline-flex items-center gap-x-2 text-sm whitespace-nowrap text-gray-500 dark:text-neutral-400 after:absolute after:-bottom-px after:inset-x-0 after:w-full after:h-0.5 after:bg-transparent hover:text-blue-700 dark:hover:text-blue-600 focus:outline-hidden focus:text-blue-700 dark:focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none active"
                id="tabs-with-underline-item-1" aria-selected="true" data-hs-tab="#tabs-with-underline-1"
                aria-controls="tabs-with-underline-1" role="tab">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-list-stars" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5" />
                    <path
                        d="M2.242 2.194a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.28.28 0 0 0-.094.3l.173.569c.078.256-.213.462-.423.3l-.417-.324a.27.27 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.28.28 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.27.27 0 0 0 .259-.194zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.28.28 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.27.27 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.28.28 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.27.27 0 0 0 .259-.194zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.28.28 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.27.27 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.28.28 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.27.27 0 0 0 .259-.194z" />
                </svg>
                Profil
            </button>
            <button type="button"
                class="hs-tab-active:font-semibold hs-tab-active:text-blue-700 dark:hs-tab-active:text-blue-600 hs-tab-active:after:bg-blue-700 dark:hs-tab-active:after:bg-blue-600 relative py-4 px-1 inline-flex items-center gap-x-2 text-sm whitespace-nowrap text-gray-500 dark:text-neutral-400 after:absolute after:-bottom-px after:inset-x-0 after:w-full after:h-0.5 after:bg-transparent hover:text-blue-700 dark:hover:text-blue-600 focus:outline-hidden focus:text-blue-700 dark:focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                id="tabs-with-underline-item-2" aria-selected="false" data-hs-tab="#tabs-with-underline-2"
                aria-controls="tabs-with-underline-2" role="tab">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" />
                    <circle cx="12" cy="10" r="3" />
                    <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662" />
                </svg>
                Avatar
            </button>
            <button type="button"
                class="hs-tab-active:font-semibold hs-tab-active:text-blue-700 dark:hs-tab-active:text-blue-600 hs-tab-active:after:bg-blue-700 dark:hs-tab-active:after:bg-blue-600 relative py-4 px-1 inline-flex items-center gap-x-2 text-sm whitespace-nowrap text-gray-500 dark:text-neutral-400 after:absolute after:-bottom-px after:inset-x-0 after:w-full after:h-0.5 after:bg-transparent hover:text-blue-700 dark:hover:text-blue-600 focus:outline-hidden focus:text-blue-700 dark:focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                id="tabs-with-underline-item-3" aria-selected="false" data-hs-tab="#tabs-with-underline-3"
                aria-controls="tabs-with-underline-3" role="tab">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-key" viewBox="0 0 16 16">
                    <path
                        d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5" />
                    <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                </svg>
                Password
            </button>
        </nav>
    </div>
    <!-- End Tab Nav -->

    <!-- Tab Content -->
    <div class="mt-3">
        <div id="tabs-with-underline-1" role="tabpanel" aria-labelledby="tabs-with-underline-item-1">
            <livewire:pages::profil.profil />
        </div>
        <div id="tabs-with-underline-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-2">
            <livewire:pages::profil.avatar />
        </div>
        <div id="tabs-with-underline-3" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-3">
            <livewire:pages::profil.password />
        </div>
        </div>
    </div>
    <!-- End Tab Content -->
</div>
