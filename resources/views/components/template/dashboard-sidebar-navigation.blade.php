<section
    class="h-full w-[280px] flex-shrink-0 flex-col justify-between overflow-y-auto bg-secondary-0 dark:bg-secondary-800">
    <nav class="space-y-8">
        <div @click="darkMode = !darkMode">
            <div class="px-10 py-6 cursor-pointer">
                <x-template.logo />
            </div>
        </div>

        <div class="space-y-4" aria-label="sidebar-section-with-label">
            <h3 class="text-xs text-secondary-900 dark:text-secondary-0 uppercase leading-4 font-semibold px-11">
                Elements </h3>
            <div class="space-y-2 flex flex-col">
                <x-template.dashboard-sidebar-menu-item label="buttons" route="home" count="5" color="red">
                    <x-heroicon-o-squares-plus />
                </x-template.dashboard-sidebar-menu-item>

                <x-template.dashboard-sidebar-menu-item label="buttons" route="dashboard" count="5" color="red">
                    <x-heroicon-o-squares-plus />
                </x-template.dashboard-sidebar-menu-item>

            </div>
        </div>


    </nav>
</section>
