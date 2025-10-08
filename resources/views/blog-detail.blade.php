<x-layouts.main>
    <x-slot:title>{{ $article->title }} - Constructly</x-slot:title>
    <x-slot:description>{{ $article->summary }}</x-slot:description>

    <section class="container mx-auto max-w-6xl py-32">
        <h1 class="text-font-primary text-5xl font-bold">{{ $article->title }}</h1>
        <p class="mt-10 text-font-secondary">{{ $article->author }}</p>
        <time class="mt-2 text-font-secondary italic text-sm" datetime="{{ $article->created_at->toW3cString() }}">
            {{ $article->created_at->format('d/m/Y') }}
        </time>
        <p class="mt-10">{{ $article->content }}</p>
    </section>
</x-layouts.main>