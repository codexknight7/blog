<div class="card mb-4">
    <div class="card-header">Archives</div>
    <div class="card-body">
        <ul>
        @foreach($archives as $archive)
            <li>
                <a href="/posts/?month={{ $archive['month'] }}&year={{ $archive['year'] }}">
                    {{ $archive['month']. ' ' .$archive['year'] }}
                </a> 
            </li>
        @endforeach
        </ul>
    </div>
    <div class="card-header">Tags</div>
    <div class="card-body">
        <ul>
        @foreach($tags as $tag)
            <li>
                <a href="/posts/tags/{{ $tag['name'] }}">
                    {{ $tag['name'] }}
                </a> 
            </li>
        @endforeach
        </ul>
    </div>
</div>    

