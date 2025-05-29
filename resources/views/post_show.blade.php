

<div class="container mt-4">
    <h2 class="text-center mb-4">Latest Posts</h2>

    @foreach($article as $key)
        @if($key->active == 1)
            <div class="card mb-3 shadow-sm">
                <h5 class="card-header bg-warning text-dark">{{ $key->title }}</h5>
                <div class="card-body">
                    <h6 class="card-title">{{ $key->summary }}</h6>
                    <p class="card-text mb-1"><strong>Issued:</strong> {{ $key->issue_date }}</p>

                    {{-- Get author --}}
                    @foreach($author as $auth)
                        @if($auth->post_id == $key->post_id)
                            <p class="mb-1"><strong>Author:</strong> {{ $auth->name }}</p>
                            <p><strong>Role:</strong> {{ $auth->role_name ?? '' }}</p>
                        @endif
                    @endforeach

                    {{-- Get tag --}}
                    @foreach($tag as $t)
                        @if($t->post_id == $key->post_id)
                            <p><strong>Tag:</strong> {{ $t->tag_name }}</p>
                        @endif
                    @endforeach

                    <a href="{{ url('detail_post/'.$key->post_id) }}" class="btn btn-primary">View Detail</a>
                </div>
            </div>
        @endif
    @endforeach

    <div class="d-flex justify-content-center mt-4">
        {{ $article->links() }}
    </div>

    {{-- Extra Info --}}
    <div class="mt-5">
        <p>
            More About the Census of Agriculture Program<br>
            The Census of Agriculture provides the only source of uniform, comprehensive, and impartial agriculture data...
        </p>
        <img src="{{ asset('image/Capture.png') }}" width="100%" height="auto" alt="Census Image">
    </div>
</div>

