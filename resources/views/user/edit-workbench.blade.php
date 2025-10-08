<x-layouts.main>
    <x-slot:title>Editar Workbench - Constructly</x-slot:title>
    <x-slot:description>Editar Workbench</x-slot:description>

    <form action="#" method="post" class="my-32 container mx-auto space-y-4 max-w-md text-left">
        @csrf
        @method('PUT')

        <h1 class="text-font-primary text-3xl font-bold">Editar Workbench - {{ $workbench->name }}</h1>

        <div class="flex flex-col gap-2 ">
            <label for="name" class="font-semibold">Nombre del Workbench:</label>
            <input
                type="text"
                name="name"
                id="name"
                value="{{ old('name', $workbench->name) }}"
                placeholder="Mi primer Workbench"
                class="w-full rounded-md border border-border-primary shadow-sm h-12 p-2">
            @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col gap-2 mb-6 ">
            <label for="description" class="font-semibold">Descripción del Workbench:</label>
            <textarea
                name="description"
                id="description"
                placeholder="Mi primer Workbench"
                class="w-full max-w-md rounded-md border border-border-primary shadow-sm h-24 p-2 resize-none">{{ old('description', $workbench->description) }}</textarea>
            @error('description')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <x-ui.form-button>Actualizar Workbench</x-ui.form-button>
    </form>

</x-layouts.main>