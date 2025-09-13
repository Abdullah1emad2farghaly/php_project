@props(['route', 'icon' => null, 'label'])

<a href="{{ route($route) }}" class="{{ request()->routeIs($route) ? 'active' : '' }}">
    @if ($icon)
        <span><i class="{{ $icon }}"></i></span>
    @endif
    <h3>{{ $label }}</h3>
</a>
