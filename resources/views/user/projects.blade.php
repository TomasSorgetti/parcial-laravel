<x-layouts.main>
    <x-slot:title>Constructly - Projects Page</x-slot:title>
    <x-slot:description>Projects page</x-slot:description>

    <section class="my-32 container mx-auto">
        <h1 class="text-font-primary text-3xl font-bold">Proyectos de {{ $workbench->name }}</h1>

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