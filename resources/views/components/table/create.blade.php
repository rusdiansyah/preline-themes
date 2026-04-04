@props(['title', 'data'])
<div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
            <div
                class="bg-white border border-gray-200 rounded-xl shadow-2xs overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
                <!-- Header -->
                <div
                    class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                    <div>
                        <div class="relative max-w-xs">
                            <label for="hs-table-search" class="sr-only">Search</label>
                            <input wire:model.live="search" type="search" name="hs-table-search" id="hs-table-search"
                                class="py-2 ps-10 pe-16 block w-full bg-white border-gray-200 rounded-lg text-sm focus:outline-hidden focus:border-blue-500 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder:text-neutral-400 dark:focus:ring-neutral-600"
                                placeholder="Search for items">
                            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                                <svg class="size-4 text-muted-foreground" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8" />
                                    <path d="m21 21-4.3-4.3" />
                                </svg>
                            </div>
                        </div>

                    </div>

                    <div>
                        <div class="inline-flex gap-x-2">
                            <button type="button" wire:click="viewAll" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                >
                                View all
                            </button>

                            <button type="button" wire:click="add"
                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-create"
                                data-hs-overlay="#hs-create">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                    <path d="M12 5v14" />
                                </svg>
                                Tambah
                            </button>

                            <button type="button"
                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-yellow-500 border border-transparent text-foreground-inverse hover:bg-yellow-600 focus:outline-hidden focus:bg-yellow-600 disabled:opacity-50 disabled:pointer-events-none"
                                aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-filter"
                                data-hs-overlay="#hs-filter">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                                    <path
                                        d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2z" />
                                </svg>
                                Filter
                            </button>
                        </div>
                    </div>
                </div>
                <!-- End Header -->

                <!-- Table -->
                {{ $slot }}
                <!-- End Table -->

            </div>
        </div>
    </div>
