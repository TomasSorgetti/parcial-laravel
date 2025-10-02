<a href="{{ route($to) }}"
    @class([ 'py-3 px-8 rounded font-semibold duration-300' , 'bg-primary hover:bg-primary-hover active:bg-primary-active text-font-tertiary'=> $variant === 'primary',
    'text-font-primary border border-font-primary hover:shadow-xl' => $variant === 'secondary',
    ])>
    {{ $slot }}
</a>