<x-layouts.main>
    <x-slot:title>Constructly - Projects Page</x-slot:title>
    <x-slot:description>Projects page</x-slot:description>

    <section class="my-32 container mx-auto">
        <div class="flex justify-between">
            <h1 class="text-font-primary text-3xl font-bold">Proyectos de {{ $workbench->name }}</h1>
            <a href="{{ route('workbenches.edit', ['id' => $workbench->id]) }}" class="text-font-tertiary bg-primary hover:bg-primary-hover hover:text-font-tertiary active:bg-primary-active py-3 px-8 rounded font-semibold duration-300">Editar Workbench</a>
        </div>

        @if($projects->isEmpty())
        <p class="text-font-secondary mt-4">No hay proyectos todavía.</p>

        @else
        <div class="flex flex-wrap gap-6 mt-16">
            @foreach($projects as $project)
            <x-ui.project-card :id="$project->id" :name="$project->name" :description="$project->description" :integrants="$project->integrants" />
            @endforeach

            <x-ui.add-new-card :to="route('projects.add-new')" />

        </div>
        @endif
    </section>
</x-layouts.main>