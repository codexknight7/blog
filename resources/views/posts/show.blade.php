@extends('layouts.master')

@section('content')
    <h1>
        {{$post->title}}
    </h1>
    @if (count($post->tags))
        <ul>
            @foreach ($post->tags as $tag)
                <li>{{ $tag['name']}}</li>
            @endforeach
        </ul>
    @endif
    <p>
    {{$post->body}}
    </p>
    <hr/>
    <div>
        @foreach ($post->comments as $comment)
            <p>
                Comment by: {{ $comment->user->name }}
            </p>
            <article>
                {{$comment->body}}
            </article>
        @endforeach
    </div>
    <div>
        <form method="POST" action="/posts/{{ $post->id }}/comments">
            {{csrf_field()}}
            <div class="form-group">
                <textarea id="body" name="body" class="form-control" placeholder="Your comment here." required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add comment</button>
            </div>
        </form>
        @include('layouts.errors')
    </div>

@endsection