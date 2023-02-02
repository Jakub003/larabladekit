<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ darkMode: true }" class="h-full "
    :class=" darkMode === true ? 'larablade-theme-dark dark' : 'larablade-theme-light'">
    <div class="h-full bg-secondary-50 dark:bg-secondary-900">

        <div x-data="{ mobileNavigation: false }" class="h-full ">
            <div class="flex h-full">
                <!-- Sidebar -->

                <div class="hidden lg:flex">
                    <x-template.dashboard-sidebar-navigation />
                </div>

                {{-- Mobile navigation --}}
                <div x-show="mobileNavigation === true" class="fixed inset-y-0 left-0 z-20 h-full w-full lg:hidden">

                    <div @click="mobileNavigation = false"
                        class="absolute inset-0 -z-10 h-full w-full bg-theme-100 opacity-80"></div>
                    <x-template.dashboard-sidebar-navigation />
                </div>

                <section class="w-full space-y-8 overflow-hidden overflow-y-auto lg:space-y-11">
                    <header
                        class="sticky top-0 z-10 grid grid-cols-2 gap-8 bg-theme-100 px-6 pt-4 md:px-11 md:pt-5 lg:pt-8">
                        <div>
                            <button class="flex h-12 w-12 items-center justify-center rounded-xl bg-theme-300 lg:hidden"
                                @click="mobileNavigation = true">
                                <x-heroicon-s-bars-3 class="h-5 w-5 text-theme-accent" />
                            </button>

                            {{-- Hidden on mobille view --}}

                            <div class="hidden space-y-2 lg:block">
                                <h3 class="text-2xl font-bold text-secondary-900 dark:text-secondary-0">Marketing</h3>

                                <p class=" text-secondary-500 dark:text-secondary-400">Lorem ipsum lorem
                                    ipsum dolor sit amet, consectetur adipis</p>
                            </div>

                        </div>


                        {{-- Hidden on laptop and desktop views --}}

                        <div class="col-span-full space-y-2 lg:hidden">
                            <h3 class="text-2xl font-bold text-secondary-900 dark:text-secondary-0">Marketing</h3>

                            <p class=" text-secondary-500 dark:text-secondary-400">Lorem ipsum lorem
                                ipsum dolor sit amet, consectetur adipis</p>

                        </div>

                    </header>

                    <main class="space-y-8 px-6 md:px-11 w-full">

                        <section>

                        </section>



                        <section>

                        </section>

                    </main>
                </section>
            </div>
        </div>
    </div>

</body>

</html>
