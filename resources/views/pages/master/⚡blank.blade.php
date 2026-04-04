<?php

use Livewire\Component;

new class extends Component {
    public $title = 'Blank Page';
};
?>

<div>
    <!-- Hire Us -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-xl mx-auto">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-gray-800 dark:text-neutral-200 sm:text-4xl">
                    Ready to hire us?
                </h1>
                <p class="mt-1 text-gray-600 dark:text-neutral-300">
                    Tell us your story and we’ll be in touch.
                </p>
            </div>

            <div class="mt-12">
                <!-- Form -->
                <form>
                    <div class="grid gap-4 lg:gap-6">
                        <!-- Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                            <div>
                                <label for="hs-firstname-hire-us-2"
                                    class="block mb-2 text-sm text-gray-800 dark:text-neutral-200 font-medium">First
                                    Name</label>
                                <input type="text" name="hs-firstname-hire-us-2" id="hs-firstname-hire-us-2"
                                    class="py-2.5 sm:py-3 px-4 block w-full bg-white dark:bg-neutral-800 border-gray-200 dark:border-neutral-700 rounded-lg sm:text-sm text-gray-800 dark:text-neutral-200 placeholder:text-gray-500 dark:placeholder:text-neutral-400 focus:border-blue-700 dark:focus:border-blue-600 focus:ring-blue-700 dark:focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none">
                            </div>

                            <div>
                                <label for="hs-lastname-hire-us-2"
                                    class="block mb-2 text-sm text-gray-800 dark:text-neutral-200 font-medium">Last
                                    Name</label>
                                <input type="text" name="hs-lastname-hire-us-2" id="hs-lastname-hire-us-2"
                                    class="py-2.5 sm:py-3 px-4 block w-full bg-white dark:bg-neutral-800 border-gray-200 dark:border-neutral-700 rounded-lg sm:text-sm text-gray-800 dark:text-neutral-200 placeholder:text-gray-500 dark:placeholder:text-neutral-400 focus:border-blue-700 dark:focus:border-blue-600 focus:ring-blue-700 dark:focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none">
                            </div>
                        </div>
                        <!-- End Grid -->

                        <div>
                            <label for="hs-work-email-hire-us-2"
                                class="block mb-2 text-sm text-gray-800 dark:text-neutral-200 font-medium">Work
                                Email</label>
                            <input type="email" name="hs-work-email-hire-us-2" id="hs-work-email-hire-us-2"
                                autocomplete="email"
                                class="py-2.5 sm:py-3 px-4 block w-full bg-white dark:bg-neutral-800 border-gray-200 dark:border-neutral-700 rounded-lg sm:text-sm text-gray-800 dark:text-neutral-200 placeholder:text-gray-500 dark:placeholder:text-neutral-400 focus:border-blue-700 dark:focus:border-blue-600 focus:ring-blue-700 dark:focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none">
                        </div>

                        <!-- Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                            <div>
                                <label for="hs-company-hire-us-2"
                                    class="block mb-2 text-sm text-gray-800 dark:text-neutral-200 font-medium">Company</label>
                                <input type="text" name="hs-company-hire-us-2" id="hs-company-hire-us-2"
                                    class="py-2.5 sm:py-3 px-4 block w-full bg-white dark:bg-neutral-800 border-gray-200 dark:border-neutral-700 rounded-lg sm:text-sm text-gray-800 dark:text-neutral-200 placeholder:text-gray-500 dark:placeholder:text-neutral-400 focus:border-blue-700 dark:focus:border-blue-600 focus:ring-blue-700 dark:focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none">
                            </div>

                            <div>
                                <label for="hs-company-website-hire-us-2"
                                    class="block mb-2 text-sm text-gray-800 dark:text-neutral-200 font-medium">Company
                                    Website</label>
                                <input type="text" name="hs-company-website-hire-us-2"
                                    id="hs-company-website-hire-us-2"
                                    class="py-2.5 sm:py-3 px-4 block w-full bg-white dark:bg-neutral-800 border-gray-200 dark:border-neutral-700 rounded-lg sm:text-sm text-gray-800 dark:text-neutral-200 placeholder:text-gray-500 dark:placeholder:text-neutral-400 focus:border-blue-700 dark:focus:border-blue-600 focus:ring-blue-700 dark:focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none">
                            </div>
                        </div>
                        <!-- End Grid -->

                        <div>
                            <label for="hs-about-hire-us-2"
                                class="block mb-2 text-sm text-gray-800 dark:text-neutral-200 font-medium">Details</label>
                            <textarea id="hs-about-hire-us-2" name="hs-about-hire-us-2" rows="4"
                                class="py-2.5 sm:py-3 px-4 block w-full bg-white dark:bg-neutral-800 border-gray-200 dark:border-neutral-700 rounded-lg sm:text-sm text-gray-800 dark:text-neutral-200 placeholder:text-gray-500 dark:placeholder:text-neutral-400 focus:border-blue-700 dark:focus:border-blue-600 focus:ring-blue-700 dark:focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none"></textarea>
                        </div>
                    </div>
                    <!-- End Grid -->

                    <!-- Checkbox -->
                    <div class="mt-3 flex">
                        <div class="flex">
                            <input id="remember-me" name="remember-me" type="checkbox"
                                class="mt-1 shrink-0 size-4 bg-transparent border-gray-300 dark:border-neutral-600 rounded-sm shadow-2xs text-blue-600 dark:text-blue-500 focus:ring-0 focus:ring-offset-0 checked:bg-blue-600 dark:checked:bg-blue-500 checked:border-blue-600 dark:checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        </div>
                        <div class="ms-3">
                            <label for="remember-me" class="text-sm text-gray-600 dark:text-neutral-300">By submitting
                                this form I have read and acknowledged the <a
                                    class="text-blue-600 dark:text-blue-500 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium"
                                    href="#">Privact policy</a></label>
                        </div>
                    </div>
                    <!-- End Checkbox -->

                    <div class="mt-6 grid">
                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-blue-600 dark:bg-blue-500 border border-transparent text-white hover:bg-blue-700 dark:hover:bg-blue-600 focus:outline-hidden focus:bg-blue-700 dark:focus:bg-blue-600 disabled:opacity-50 disabled:pointer-events-none">Send
                            inquiry</button>
                    </div>

                    <div class="mt-3 text-center">
                        <p class="text-sm text-gray-500 dark:text-neutral-400">
                            We'll get back to you in 1-2 business days.
                        </p>
                    </div>
                </form>
                <!-- End Form -->
            </div>
        </div>
    </div>
    <!-- End Hire Us -->

</div>
