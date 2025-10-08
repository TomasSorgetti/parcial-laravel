<x-layouts.main>
    <x-slot:title>Constructly - Welcome Page</x-slot:title>
    <x-slot:description>Welcome page</x-slot:description>

    <section class="my-32 container mx-auto">
        <h1 class="text-font-primary text-3xl font-bold">Bienvenido devuelta {{ auth()->user()->name }}</h1>
        <h2 class="text-font-primary text-xl font-bold mt-6">Tus Workbenchs</h2>
        <div class="mt-10">
            @if($workbenches->isEmpty())
            <p class="text-font-secondary">No tienes workbenchs todavía.</p>
            @else
            <div class="flex flex-wrap gap-6">
                @foreach($workbenches as $workbench)
                <x-ui.workbench-card
                    :id="$workbench->id"
                    :name="$workbench->name"
                    :description="$workbench->description"
                    :projects_count="$workbench->projects_count" />
                @endforeach

                <!-- todo => add method -->
                <x-ui.add-new-card to="{{ route('workbenches.add-new') }}" />
            </div>
            @endif
        </div>
    </section>
</x-layouts.main>