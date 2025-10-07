<div class="border border-border-primary/60 p-6 max-w-[23rem] rounded-2xl min-h-[28rem] flex flex-col justify-between">
    <div class="flex-1">

        <div class="flex justify-between text-font-secondary text-sm italic">
            <p>{{ $author }}</p>

        </div>

        <h3 class="text-font-primary text-2xl font-bold mt-4">{{ $title }}</h3>
        <!-- <p>{{ $slug }}</p> -->
        <p class="mt-4 text-font-secondary">{{ $summary }}</p>
    </div>
    <div class="grid grid-cols-2 gap-8 mt-4 w-full">
        <a href="{{ route('admin.blog.edit', $slug) }}" class="w-full bg-blue-400 grid-col-span-1 rounded font-bold h-12 flex items-center justify-center text-font-tertiary">Editar</a>

        <form action="#" method="post">
            <button type="submit" class="w-full bg-red-400 grid-col-span-1 rounded font-bold h-12 flex items-center justify-center text-font-tertiary">Eliminar</button>
        </form>
    </div>
</div>