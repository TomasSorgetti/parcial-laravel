<x-layouts.main>
    <x-slot:title>Constructly - Blog</x-slot:title>
    <x-slot:description>Pagina de blog</x-slot:description>

    <section class="container mx-auto py-32">
        <h1 class="text-font-primary text-5xl font-bold">Blog Page</h1>
        <div class="mt-10 flex flex-wrap gap-4">
            <!-- <p class="text-center">No se encontraron posts...</p> -->
            @foreach ($articles as $article)
            <x-ui.blog-card
                :title="$article->title"
                :slug="$article->slug"
                :author="$article->author"
                :summary="$article->summary" />
            @endforeach
        </div>
    </section>
</x-layouts.main>