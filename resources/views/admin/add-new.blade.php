<x-layouts.main>
    <x-slot:title>Constructly - Admin - Nuevo Articulo</x-slot:title>
    <x-slot:description>Admin - Nuevo Articulo</x-slot:description>

    <section class="my-32 container mx-auto">
        <h1 class="text-font-primary text-5xl font-bold">Crear un nuevo Artículo</h1>
        <form action="{{ route('admin.blog.save') }}" method="POST" class="w-full flex gap-6 mt-10">
            @csrf
            <!-- left side -->
            <div class=" flex-1 flex flex-col gap-4">
                <div>
                    <input
                        type="text"
                        name="title"
                        id="title"
                        placeholder="Tu Titulo de Articulo"
                        data-label="Titulo del Articulo"
                        value="{{ old('title') }}"
                        class="border border-border-primary/60 h-12 rounded-md px-4 py-2 w-full">
                    @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <textarea
                        name="content"
                        id="content"
                        data-label="Contenido del Articulo"
                        class="border border-border-primary/60 min-h-[32rem] rounded-md p-2 w-full resize-none"
                        placeholder="Tu Contenido">{{ old('content') }}</textarea>
                    @error('content')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- right side -->
            <div class="flex-shrink shadow-lg border border-border-primary/60 rounded-md w-md p-4 space-y-4">
                <h2 class="font-bold">Metadatos</h2>
                <div>
                    <label for="slug" class="font-medium">Slug:</label>
                    <input type="text" name="slug" id="slug" value="{{ old('slug') }}" class="border border-border-primary/60 h-12 rounded-md p-2 w-full" placeholder="mi-primer-post">
                    @error('slug')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="author" class="font-medium">Author:</label>
                    <input type="text" name="author" id="author" value="{{ old('author') }}" class="border border-border-primary/60 h-12 rounded-md p-2 w-full" placeholder="John Doe">
                    @error('author')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="summary" class="font-medium">Summary:</label>
                    <textarea name="summary" id="summary" placeholder="Resumen del Articulo" class="border border-border-primary/60 h-12 rounded-md p-2 w-full resize-none min-h-32">{{ old('summary') }}</textarea>
                    @error('summary')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="tags" class="font-medium">tags:</label>
                    <input type="text" name="tags" id="tags" value="{{ old('tags') }}" class="border border-border-primary/60 h-12 rounded-md p-2 w-full" placeholder="php, laravel, javascript, vue">
                    @error('tags')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="text-center cursor-pointer bg-primary w-full p-2 rounded text-font-tertiary font-bold">Crear artículo</button>
            </div>

        </form>
    </section>
</x-layouts.main>