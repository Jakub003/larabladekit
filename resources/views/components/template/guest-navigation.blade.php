<div
    id="guest-nav"
    x-data="{openMobileMenu: false}"
    class="w-full overflow-hidden border-theme-100 lg:border-b"
>
    <div
        class="mx-auto flex w-full items-center justify-between px-6 py-[14px] sm:px-12 lg:px-14 xl:max-w-7xl xl:gap-24 xl:px-0"
    >
        <a href="{{ route("guest.home") }}">
            <x-template.logo />
        </a>

        <div class="flex items-center gap-4 lg:gap-8">
            <nav class="hidden items-center space-x-8 lg:flex">
                <x-guest.nav-link
                    href="{{ route('guest.components') }}"
                    route="guest.components"
                >
                    Components
                </x-guest.nav-link>
                <x-guest.nav-link
                    href="{{ route('guest.templates') }}"
                    route="guest.templates"
                >
                    Templates
                </x-guest.nav-link>

                <x-guest.nav-link
                    href="{{ route('guest.guides') }}"
                    route="guest.guides"
                >
                    Guides
                </x-guest.nav-link>
                <x-guest.nav-link
                    href="{{ route('guest.resources') }}"
                    route="guest.resources"
                >
                    Resources
                </x-guest.nav-link>

                <x-guest.nav-link
                    href="{{ route('guest.community') }}"
                    route="guest.community"
                >
                    Community
                </x-guest.nav-link>

                <a href="{{ route("social.discord") }}">
                    <x-lb.button size="sm" width="w-full">
                        <div class="flex items-center space-x-2">
                            <x-lb.social.icon.discord
                                class="h-5 w-5 text-white"
                            />
                            <span class="text-white">Discord</span>
                        </div>
                    </x-lb.button>
                </a>

                {{-- <x-guest.nav-dark-mode-toggle /> --}}
            </nav>
        </div>

        {{-- Mobile menu btn --}}
        <div class="flex space-x-4 lg:hidden">
            {{-- <x-guest.nav-dark-mode-toggle /> --}}

            <button
                @click="openMobileMenu = true"
                @click.away="openMobileMenu = false"
                class="group flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-xl bg-theme-400 hover:bg-theme-primary-soft-hover"
            >
                <x-heroicon-o-bars-3
                    class="h-6 w-6 text-theme-accent group-hover:text-theme-primary"
                />
            </button>
        </div>

        {{-- Mobile menu --}}
        <div
            x-show="openMobileMenu === true"
            x-trap.noscroll="openMobileMenu"
            style="display: none"
            class="fixed top-0 left-0 z-50 h-full w-full overflow-y-auto lg:hidden"
        >
            <div
                class="absolute inset-0 -z-10 h-full w-full bg-theme-200 opacity-80"
            ></div>

            {{-- Content --}}
            <div
                class="z-50 flex h-full w-[280px] flex-col items-start justify-between overflow-y-auto bg-theme-300"
            >
                <div class="w-full">
                    {{-- header --}}
                    <div class="w-full border-b border-theme-200">
                        <div class="flex items-center justify-between p-6">
                            <a href="{{ route("guest.home") }}">
                                <x-template.logo />
                            </a>

                            <button
                                @click="openMobileMenu = false"
                                class="group flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-xl bg-theme-400 hover:bg-theme-primary-soft-hover lg:hidden"
                            >
                                <x-heroicon-o-x-mark
                                    class="h-6 w-6 text-theme-accent group-hover:text-theme-primary"
                                />
                            </button>
                        </div>
                    </div>

                    {{-- menu --}}
                    <nav class="flex w-full flex-col space-y-6 px-6 py-8">
                        <x-guest.nav-link
                            href="{{ route('guest.components') }}"
                            route="guest.components"
                        >
                            Components
                        </x-guest.nav-link>

                        <x-guest.nav-link
                            href="{{ route('guest.templates') }}"
                            route="guest.templates"
                        >
                            Templates
                        </x-guest.nav-link>
                        <x-guest.nav-link
                            href="{{ route('guest.guides') }}"
                            route="guest.guides"
                        >
                            Guides
                        </x-guest.nav-link>
                        <x-guest.nav-link
                            href="{{ route('guest.resources') }}"
                            route="guest.resources"
                        >
                            Resources
                        </x-guest.nav-link>
                        <x-guest.nav-link
                            href="{{ route('guest.community') }}"
                            route="guest.community"
                        >
                            Community
                        </x-guest.nav-link>

                        <a href="{{ route("social.discord") }}">
                            <x-lb.button size="sm" width="w-full">
                                <div class="flex items-center space-x-2">
                                    <x-lb.social.icon.discord
                                        class="h-5 w-5 text-white"
                                    />
                                    <span class="text-white">Discord</span>
                                </div>
                            </x-lb.button>
                        </a>
                    </nav>
                </div>

                {{-- Footer --}}
                <div class="space-y-6 p-6 pb-8">
                    <p class="text-sm text-theme-accent">
                        © 2022 LaraBlade. All rights reserved.
                    </p>

                    <div class="grid grid-cols-6 items-center gap-2">
                        <a
                            href="{{ route("social.twitter") }}"
                            class="group flex h-8 w-8 items-center justify-center rounded-md border border-theme-200 transition duration-150 ease-in hover:border-theme-primary"
                        >
                            <x-lb.social.icon.twitter
                                class="h-4 w-4 fill-current text-theme-accent transition duration-150 ease-in group-hover:text-theme-primary"
                            />
                        </a>
                        <a
                            href="{{ route("social.instagram") }}"
                            class="group flex h-8 w-8 items-center justify-center rounded-md border border-theme-200 transition duration-150 ease-in hover:border-theme-primary"
                        >
                            <x-lb.social.icon.instagram
                                class="h-4 w-4 fill-current text-theme-accent transition duration-150 ease-in group-hover:text-theme-primary"
                            />
                        </a>
                        <a
                            href="{{ route("social.dribbble") }}"
                            class="group flex h-8 w-8 items-center justify-center rounded-md border border-theme-200 transition duration-150 ease-in hover:border-theme-primary"
                        >
                            <x-lb.social.icon.dribbble
                                class="h-4 w-4 fill-current text-theme-accent transition duration-150 ease-in group-hover:text-theme-primary"
                            />
                        </a>
                        <a
                            href="{{ route("social.pinterest") }}"
                            class="group flex h-8 w-8 items-center justify-center rounded-md border border-theme-200 transition duration-150 ease-in hover:border-theme-primary"
                        >
                            <x-lb.social.icon.pinterest
                                class="h-4 w-4 fill-current text-theme-accent transition duration-150 ease-in group-hover:text-theme-primary"
                            />
                        </a>
                        <a
                            href="{{ route("social.behance") }}"
                            class="group flex h-8 w-8 items-center justify-center rounded-md border border-theme-200 transition duration-150 ease-in hover:border-theme-primary"
                        >
                            <x-lb.social.icon.behance
                                class="h-4 w-4 fill-current text-theme-accent transition duration-150 ease-in group-hover:text-theme-primary"
                            />
                        </a>
                        <a
                            href="{{ route("social.facebook") }}"
                            class="group flex h-8 w-8 items-center justify-center rounded-md border border-theme-200 transition duration-150 ease-in hover:border-theme-primary"
                        >
                            <x-lb.social.icon.facebook
                                class="h-4 w-4 fill-current text-theme-accent transition duration-150 ease-in group-hover:text-theme-primary"
                            />
                        </a>
                        {{--
                            <a
                            href="{{ route("social.youtube") }}"
                            class="group flex h-12 w-12 items-center justify-center rounded-md border border-theme-200 transition duration-150 ease-in hover:border-theme-primary"
                            >
                            <x-lb.social.icon.youtube
                            class="h-6 w-6 fill-current text-theme-accent transition duration-150 ease-in group-hover:text-theme-primary"
                            />
                            </a>
                        --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
