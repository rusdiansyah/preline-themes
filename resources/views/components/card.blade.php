@props(['title'])
<!-- Card -->
<div class="flex flex-col bg-card border border-card-line shadow-2xs rounded-xl  ">
  <div class="bg-surface border-b border-card-line rounded-t-xl py-3 px-4  dark:bg-neutral-800 dark:border-neutral-700">
    <p class="text-sm text-muted-foreground-1 dark:text-white">
      {{ $title }}
    </p>
  </div>
  <div class="p-4">
    {{ $slot }}
  </div>
</div>
<!-- End Card -->
