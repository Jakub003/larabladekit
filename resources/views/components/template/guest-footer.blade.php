<footer
    class="relative w-full pb-12 pt-[72px] after:pointer-events-none after:absolute after:bottom-0 after:left-0 after:h-[454px] after:w-[454px] after:rounded-full after:bg-theme-primary after:opacity-20 after:blur-[250px] after:content-[''] md:pt-36 md:pb-[160px] lg:pb-[200px]"
>
    <div
        class="mx-auto grid w-full gap-6 px-6 sm:grid-cols-3 sm:gap-12 sm:px-12 md:grid-cols-5 lg:grid-cols-6 lg:gap-16 xl:max-w-7xl xl:gap-24 xl:px-0"
    >
        {{-- Info --}}
        <div class="space-y-8 sm:col-span-full md:col-span-2 lg:col-span-3">
            {{-- Footer logo --}}
            <div>
                <a href="{{ route("guest.home") }}">
                    <x-template.logo />
                </a>
            </div>

            {{-- Copyright --}}
            <p class="text-sm text-theme-accent">
                © 2022 LaraBlade. All rights reserved.
            </p>

            <div class="flex items-center gap-1.5">
                <a
                    href="{{ route("social.discord") }}"
                    class="group flex h-8 w-8 items-center justify-center rounded-md border border-theme-200 transition duration-150 ease-in hover:border-theme-primary"
                >
                    <x-lb.social.icon.discord
                        class="h-4 w-4 fill-current text-theme-accent transition duration-150 ease-in group-hover:text-theme-primary"
                    />
                </a>

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
                {{-- <a
                    href="{{ route("social.youtube") }}"
                    class="group flex h-8 w-8 items-center justify-center rounded-md border border-theme-200 transition duration-150 ease-in hover:border-theme-primary"
                >
                    <x-lb.social.icon.youtube
                        class="h-4 w-4 fill-current text-theme-accent transition duration-150 ease-in group-hover:text-theme-primary"
                    />
                </a> --}}
            </div>
        </div>

        {{-- laraBlade links --}}
        <div class="space-y-5">
            <span class="font-medium text-theme-white">Engage</span>

            <ul class="flex flex-col space-y-2">
                <x-guest.footer-link
                    href="{{ route('guest.bounties') }}"
                    route="guest.bounties"
                >
                    Bounties
                </x-guest.footer-link>
                <x-guest.footer-link
                    href="{{ route('guest.challenges') }}"
                    route="guest.challenges"
                >
                    Challenges
                </x-guest.footer-link>
                <x-guest.footer-link
                    href="{{ route('guest.resources') }}"
                    route="guest.resources"
                >
                    Resources
                </x-guest.footer-link>
                <x-guest.footer-link
                    href="{{ route('guest.community') }}"
                    route="guest.community"
                >
                    Community
                </x-guest.footer-link>
            </ul>
        </div>

        {{-- Components --}}
        <div class="space-y-5">
            <span class="font-medium text-theme-white">Community</span>
            <ul class="flex flex-col space-y-2">
                <x-guest.footer-link
                    href="{{ route('social.discord') }}"
                    target="_blank"
                    route="social.discord"
                >
                    Discord
                </x-guest.footer-link>
                <x-guest.footer-link
                    href="{{ route('guest.patrons') }}"
                    route="guest.patrons"
                >
                    Patrons
                </x-guest.footer-link>
                <x-guest.footer-link
                    href="{{ route('guest.larapoints') }}"
                    route="guest.larapoints"
                >
                    LaraPoints
                </x-guest.footer-link>
                <x-guest.footer-link
                    href="{{ route('guest.leaderboards') }}"
                    route="guest.leaderboards"
                >
                    Leaderboards
                </x-guest.footer-link>
            </ul>
        </div>

        {{-- Community --}}
        <div class="space-y-5">
            <span class="font-medium text-theme-white">Documents</span>
            <ul class="flex flex-col space-y-2">
                <x-guest.footer-link
                    href="{{ route('guest.attribution') }}"
                    route="guest.attribution"
                >
                    Attribution
                </x-guest.footer-link>
                <x-guest.footer-link
                    href="{{ route('guest.mit-license') }}"
                    route="guest.mit-license"
                >
                    MIT License
                </x-guest.footer-link>
                <x-guest.footer-link
                    href="{{ route('guest.privacy-policy') }}"
                    route="guest.privacy-policy"
                >
                    Privacy Policy
                </x-guest.footer-link>
                <x-guest.footer-link
                    href="{{ route('guest.terms-of-service') }}"
                    route="guest.terms-of-service"
                >
                    Terms of Service
                </x-guest.footer-link>
            </ul>
        </div>
    </div>
</footer>
