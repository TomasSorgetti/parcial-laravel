<a
    href="{{ route('projects.by.workbench', ['id' => $id]) }}"
    class="relative border border-border-primary/60 p-6 rounded-2xl flex flex-col shadow-sm w-full max-w-[22rem] min-h-[12rem]">

    <span class="absolute top-2 right-5 text-font-secondary text-sm">
        {{ $projects_count ?? 0 }}
    </span>

    <h2 class="text-2xl font-bold text-font-primary mt-2">{{ $name }}</h2>
    <p class="mt-2 text-font-secondary">{{ $description }}</p>
</a>