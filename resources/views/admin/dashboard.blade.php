<x-layouts.main>
    <x-slot:title>Constructly - Admin Dashboard</x-slot:title>
    <x-slot:description>Admin Dashboard</x-slot:description>

    <section class="container mx-auto py-32">
        <h1 class="text-font-primary text-5xl font-bold">Admin Dashboard</h1>
        <div class="mt-10">
            <h2 class="text-font-primary text-3xl font-bold">Artículos</h2>
            <div class="flex w-full justify-between mt-4">
                <input type="text" placeholder="Buscar..." class="border border-border-primary rounded-md px-4 py-2 w-full max-w-md">
                <x-ui.main-button to="admin.blog.create" variant="primary">Agregar</x-ui.main-button>
            </div>
        </div>
        <!-- todo => add posts -->
        <div class="mt-10 flex flex-wrap gap-4">
            <!-- <p class="text-center">No se encontraron posts...</p> -->
            @foreach ($articles as $article)
            <x-ui.admin-blog-card
                :title="$article->title"
                :slug="$article->slug"
                :author="$article->author"
                :summary="$article->summary" />
            @endforeach
        </div>
    </section>
</x-layouts.main>