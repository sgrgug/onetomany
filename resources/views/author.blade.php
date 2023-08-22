<div>
    {{ $author->authorName }}
    {{-- {{ $author->posts }} --}}
<br >
    @foreach ($author->posts as $post)
        {{ $post->post }}<br />
    @endforeach
</div>