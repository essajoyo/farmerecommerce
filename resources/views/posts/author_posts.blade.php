@include('disign.nav')

<div class="container py-5">
    <div class="text-center mb-4">
        <h2><span>🧑‍💼 Posts by {{ $author->name }}</span></h2>
    </div>

    @if($posts->count())
        <div class="card mb-4">
            <div class="card-header text-white" style="background: linear-gradient(to right, #4a148c, #7b1fa2);">
                {{ $author->name }}'s Posts
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Issue Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <a href="{{ route('posts.show', $post) }}" class="post-link">
                                        {{ $post->title }}
                                    </a>
                                </td>
                                <td>{{ \Carbon\Carbon::parse($post->issue_date)->format('F d, Y') }}</td>
                                <td>
                                    @if($post->active)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Deactive</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-warning text-center">
            No posts found for {{ $author->name }}.
        </div>
    @endif
</div>

