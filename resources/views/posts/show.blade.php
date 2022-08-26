<x-layouts.app
    :title="$post->title"
    :meta-description="$post->body"
>
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">{{ $post->title }}</h1>
    <div class="flex flex-col max-w-xl px-8 py-4 mx-auto bg-white rounded shadow h-96 dark:bg-slate-800">
        <p class="flex-1 leading-normal text-slate-600 dark:text-slate-400">{{ $post->body }}</p>

        <a class="mr-auto text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none" href="{{ route('posts.index') }}">Regresar</a>
    </div>
</x-layouts.app>
