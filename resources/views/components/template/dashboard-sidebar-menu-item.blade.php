@props([
    'label' => 'label',
    'route' => 'home',
    'count',
    'color' => 'purple',
    'textColors' => [
        'blue' => 'text-theme-blue',
        'gray' => 'text-theme-gray',
        'red' => 'text-theme-red',
        'green' => 'text-theme-green',
        'yellow' => 'text-theme-yellow',
        'purple' => 'text-theme-purple',
    ],
    'bgColors' => [
        'blue' => 'bg-theme-blue-accent',
        'gray' => 'bg-theme-gray-accent',
        'red' => 'bg-theme-red-accent',
        'green' => 'bg-theme-green-accent',
        'yellow' => 'bg-theme-yellow-accent',
        'purple' => 'bg-theme-purple-accent',
    ],
])
<a href="{{ route($route) }}" class="group flex items-center justify-between h-10" aria-current="page">
    <div class="flex items-center justify-between w-full px-11">
        <div class="flex items-center space-x-4 ">
            <div
                class="h-6 w-6  {{ Request::routeIs($route) ? 'text-primary-500' : 'text-secondary-300 group-hover:text-primary-300' }}">
                {{ $slot }}
            </div>
            <span
                class="truncate capitalize font-semibold {{ Request::routeIs($route) ? ' text-primary-500' : 'text-secondary-300 group-hover:text-primary-300' }}">
                {{ $label }}
            </span>
        </div>

        {{-- @isset($count)
            <div class="h-5 px-2 rounded-md flex items-center justify-items-center {{ $bgColors[$color] }}">
                <p class="text-xs {{ $textColors[$color] }}">{{ $count }}</p>
            </div>
        @endisset --}}

    </div>

    <div
        class="h-10 border-2 rounded-l-xl {{ Request::routeIs($route) ? ' border-primary-500' : 'border-transparent group-hover:border-primary-300' }}">
    </div>
</a>
