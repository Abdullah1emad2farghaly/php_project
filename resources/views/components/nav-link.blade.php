@props(['route'])

<a href="{{ route($route) }}" class="{{ request()->routeIs($route) ? 'active' : '' }}">
    {{ $slot }}
</a>
