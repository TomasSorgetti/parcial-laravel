<div
    @class([ 'relative border p-6 min-w-[22rem] rounded-2xl h-[36rem] flex flex-col justify-between shadow-xl border-border-primary/30' , 'border-primary min-h-[38rem]'=> $variant === 'secondary',
    ])>
    @if ($isActive)
    <span class="bg-primary text-font-tertiary text-sm font-semibold py-1 px-4 rounded-full absolute -top-3 left-1/2 -translate-x-1/2">Más Popular</span>
    @endif

    <div class="flex flex-col items-center">
        <img src="{{ $icon }}" alt="" draggable="false" loading="lazy" class="w-20 h-20">
        <h3 class="font-bold text-3xl mt-2">{{ $plan }}</h3>
    </div>

    <ul class="flex-1 mt-6">
        @foreach ($items as $item)
        <li class="flex items-baseline gap-2">
            <img src="/icons/done.svg" alt="done icon">
            {{ $item }}
        </li>
        @endforeach
    </ul>

    <a href="#"
        @class([ 'font-semibold w-full text-center py-3 rounded' , 'text-font-tertiary bg-primary hover:bg-primary-hover active:bg-primary-active'=> $variant === 'secondary',
        'text-font-secondary border border-font-secondary bg-font-secondary/10 hover:shadow-xl' => $variant === 'primary',
        'bg-secondary hover:bg-secondary-hover active:bg-secondary-active text-font-tertiary hover:shadow-xl' => $variant === 'tertiary',
        ])>
        {{ $cta }}
    </a>
</div>
