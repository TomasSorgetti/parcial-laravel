<x-layouts.main>
    <x-slot:title>Modificar proyecto - Constructly</x-slot:title>
    <x-slot:description>Modificar proyecto</x-slot:description>

    <form action="{{ route('projects.edit', ['id' => $project->id]) }}" method="post" class="my-32 container mx-auto space-y-4 max-w-md text-left">
        @csrf
        @method('PUT')

        <h1 class="text-font-primary text-3xl font-bold">Modificar proyecto - {{ $project->name }}</h1>

        <div class="flex flex-col gap-2 ">
            <label class="font-semibold" for="name">Nombre:</label>
            <input
                type="text"
                name="name"
                id="name"
                value="{{ old('name', $project->name) }}"
                placeholder="Mi primer Proyecto"
                class="w-full rounded-md border border-border-primary shadow-sm h-12 p-2">
            @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col gap-2 ">
            <label class="font-semibold" for="address">Dirección:</label>
            <input
                type="text"
                name="address"
                id="address"
                value="{{ old('address', $project->address) }}"
                placeholder="Mi primer Workbench"
                class="w-full rounded-md border border-border-primary shadow-sm h-12 p-2">
            @error('address')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div class="flex flex-col gap-2">
                <label class="font-semibold" for="latitude">Latitud:</label>
                <input
                    type="number"
                    name="latitude"
                    id="latitude"
                    value="{{ old('latitude', $project->latitude) }}"
                    placeholder="-34.6037"
                    class="w-full rounded-md border border-border-primary shadow-sm h-12 p-2">
                @error('latitude')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-2">
                <label class="font-semibold" for="longitude">Longitud:</label>
                <input
                    type="number"
                    name="longitude"
                    id="longitude"
                    value="{{ old('longitude', $project->longitude) }}"
                    placeholder="-58.3816"
                    class="w-full rounded-md border border-border-primary shadow-sm h-12 p-2">
                @error('longitude')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>


        <div class="grid grid-cols-2 gap-4">
            <div class="flex flex-col gap-2 ">
                <label for="start_date" class="font-semibold">Fecha de inicio:</label>
                <input
                    type="date"
                    name="start_date"
                    id="start_date"
                    value="{{ old('start_date', $project->start_date) }}"
                    class="w-full rounded-md border border-border-primary shadow-sm h-12 p-2">
                @error('start_date')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-2 ">
                <label for="end_date" class="font-semibold">Fecha de fin:</label>
                <input
                    type="date"
                    name="end_date"
                    id="end_date"
                    value="{{ old('end_date', $project->end_date) }}"
                    class="w-full rounded-md border border-border-primary shadow-sm h-12 p-2">
                @error('end_date')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-col gap-2 mb-6 ">
            <label for="description" class="font-semibold">Descripción:</label>
            <textarea
                name="description"
                id="description"
                placeholder="Mi primer Proyecto"
                class="w-full max-w-md rounded-md border border-border-primary shadow-sm h-24 p-2 resize-none">{{ old('description', $project->description) }}</textarea>
            @error('description')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <x-ui.form-button>Guardar Proyecto</x-ui.form-button>
    </form>
</x-layouts.main>