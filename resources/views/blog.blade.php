<x-layouts.app
    title="Blog"
    meta-description="Blog meta description"
>
    <h1>Blog</h1>
    @foreach($posts as $post)
        <h1>{{ $post['title'] }}</h1>
    @endforeach
</x-layouts.app>
