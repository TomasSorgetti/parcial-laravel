<a
    href="{{ route('project', ['id' => $id]) }}"
    class="relative border border-border-primary/60 p-6 rounded-2xl flex flex-col shadow-sm max-w-[22rem] min-h-[12rem]">
    <h2 class="text-2xl font-bold text-font-primary mt-2">{{ $name }}</h2>
    <p class="mt-2 text-font-secondary">{{ $description }}</p>

    <span class="absolute top-2 right-5 text-font-secondary text-sm">
        {{ $integrants_count ?? 0 }}
    </span>
</a>