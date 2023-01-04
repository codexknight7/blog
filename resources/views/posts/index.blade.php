@extends ('layouts.master')


@section('content')
    <div>
        @foreach($posts as $post)
            @include('posts.post')
        @endforeach    
    </div>
@endsection

