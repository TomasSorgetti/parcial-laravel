<a
    href="<?= route($to); ?>"
    class=" {{request()->routeIs($to) ? 'text-font-tertiary font-semibold' : 'text-font-tertiary/70'}}"
    {!! request()->routeIs($to) ? 'aria-current="page"' : '' !!}
    >
    {{ $slot }}
</a>