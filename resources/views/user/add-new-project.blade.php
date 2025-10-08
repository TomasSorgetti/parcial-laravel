<x-layouts.main>
    <x-slot:title>Crear un nuevo Proyecto - Constructly</x-slot:title>
    <x-slot:description>Crear un nuevo Proyecto</x-slot:description>

    <form action="{{ route('projects.add-new') }}" method="post" class="my-32 container mx-auto space-y-4 max-w-md text-left">
        @csrf
        <h1 class="text-font-primary text-3xl font-bold">Crear un nuevo Proyecto</h1>

        <div class="flex flex-col gap-2 ">
            <label class="font-semibold" for="name">Nombre:</label>
            <input
                type="text"
                name="name"
                id="name"
                value="{{ old('name') }}"
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
                value="{{ old('address') }}"
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
                    value="{{ old('latitude') }}"
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
                    value="{{ old('longitude') }}"
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
                    value="{{ old('start_date') }}"
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
                    value="{{ old('end_date') }}"
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
                value="{{ old('description') }}"
                class="w-full max-w-md rounded-md border border-border-primary shadow-sm h-24 p-2 resize-none"></textarea>
            @error('description')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <x-ui.form-button>Crear Proyecto</x-ui.form-button>
    </form>
</x-layouts.main>