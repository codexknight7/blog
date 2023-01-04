<div>
    <h2>
        <a href="/posts/{{$post->id}}">
            {{ $post->title}}
        </a>
    </h2>
    <p>
    {{ $post->user->name }} on {{$post->created_at->toFormattedDateString()}}
    </p>
    <p>
        {{ $post->body}}
    </p>
</div>