@props(['title'])
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="mx-auto max-w-2xl">
        <div class="text-center">
            <h2 class="text-xl text-foreground dark:text-white font-bold sm:text-3xl">
                {{ $title }}
            </h2>
        </div>

        <!-- Card -->
        <div class="mt-5 p-4 relative z-10 bg-card border border-card-line rounded-xl sm:mt-10 md:p-10">
            {{ $slot }}
        </div>
    </div>
</div>
