<x-layouts.main>
    <x-slot:title>{{ $project->name }} - Constructly</x-slot:title>
    <x-slot:description>{{ $project->description }}</x-slot:description>

    <section class="my-32 container mx-auto">
        <div class="w-full flex items-center justify-between">
            <h1 class="text-font-primary text-4xl font-bold">{{ $project->name }}</h1>
            <a href="{{ route('projects.edit', ['id' => $project->id]) }}" class="text-font-tertiary bg-primary hover:bg-primary-hover hover:text-font-tertiary active:bg-primary-active py-3 px-8 rounded font-semibold duration-300">Modificar proyecto</a>
        </div>

        <p class="text-font-secondary mt-4">{{ $project->description }}</p>

        <div class="flex gap-6 py-10">
            @if($project->boards->isEmpty())
            <div>
                <p class="text-font-secondary">No tienes tableros todavía.</p>
            </div>
            @endif

            @foreach ($project->boards as $board)
            <x-ui.board-card :name="$board->name" />
            @endforeach
            <a href="#" class="bg-gray-100 hover:bg-primary hover:text-font-tertiary active:bg-primary-active min-w-[16rem] min-h-[30rem] text-5xl text-font-secondary w-24 h-24 flex items-center justify-center cursor-pointer">+</a>
        </div>
    </section>
</x-layouts.main>