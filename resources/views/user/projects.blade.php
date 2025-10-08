<x-layouts.main>
    <x-slot:title>Constructly - Projects Page</x-slot:title>
    <x-slot:description>Projects page</x-slot:description>

    <section class="my-32 container mx-auto">
        <h1 class="text-font-primary text-3xl font-bold">Proyectos de {{ $workbench->name }}</h1>

        @if($projects->isEmpty())
        <p class="text-font-secondary mt-4">No hay proyectos todavía.</p>

        @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-16">
            @foreach($projects as $project)
            <x-ui.project-card :id="$project->id" :name="$project->name" :description="$project->description" :integrants="$project->integrants" />
            @endforeach

            <form action="#" method="post" class=" h-full flex items-center justify-start ">
                <button type="submit" class="bg-border-primary/60 hover:bg-primary active:bg-primary-active rounded-full w-24 h-24 flex items-center justify-center cursor-pointer">
                    +
                </button>
            </form>
        </div>
        @endif
    </section>
</x-layouts.main>