@props(['title', 'count', 'icon', 'route'])
<div>
    <div
        class="flex flex-col bg-white dark:bg-neutral-800 border border-gray-200 dark:border-neutral-700 shadow-2xs rounded-xl">
        <div class="p-4 md:p-5 flex justify-between gap-x-3">
            <div>
                <p class="text-xs uppercase text-gray-500 dark:text-neutral-400">
                    Total {{ $title }}
                </p>
                <div class="mt-1 flex items-center gap-x-2">
                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                        {{ $count }} Data
                    </h3>
                    <span class="flex items-center gap-x-1 text-green-600">
                        <svg class="inline-block size-5 self-center" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                            <polyline points="16 7 22 7 22 13" />
                        </svg>
                    </span>
                </div>
            </div>
            <div
                class="shrink-0 flex justify-center items-center size-11 bg-blue-600 dark:bg-blue-500 text-white rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
                    <path
                        d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1z" />
                </svg>
            </div>
        </div>

        <a wire:navigate
            class="py-3 px-4 md:px-5 inline-flex justify-between items-center text-sm text-gray-600 dark:text-neutral-300 border-t border-gray-200 dark:border-neutral-700 hover:bg-gray-50 dark:hover:bg-neutral-700 focus:outline-hidden focus:bg-gray-50 dark:focus:bg-neutral-700 rounded-b-xl"
            href="{{ route($route) }}">
            View reports
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" />
            </svg>
        </a>
    </div>
</div>
