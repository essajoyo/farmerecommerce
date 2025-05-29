@include('disign.nav')

<div class="container py-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold">📋 Posts List</h2>
    </div>

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    @if($posts->count() > 0)
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle text-center">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Summary</th>
                        <th>Issue Date</th>
                        <th>Categories & Subcategories</th>
                        <th>User</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as  $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->summary }}</td>
                            <td>{{ \Carbon\Carbon::parse($post->issue_date)->format('F d, Y') }}</td>
                            <td>  
                                @forelse($post->subcategories as $sub)
                                <span>{{ $sub->category->categoryName }} > {{ $sub->post_name }}</span>

                                @empty
                                    <span class="text-muted">No Subcategories</span>
                                @endforelse
                            </td>


                            <td>{{ $post->user->name ?? 'Unknown' }}</td>
                            <td>{{ $post->user->role ?? 'Admin' }}</td>
                            <td>
                                @if($post->active)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Deactive</span>
                                @endif
                            </td>
                            <td>
                               
                               <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">✏️ Edit</a>

                              
                                <a href=" {{ route('posts.show', $post->post_id) }}" class="btn btn-info btn-sm">🔍 Detail</a>
                                <a href="{{ route('posts.toggle_status', $post->post_id) }}" class="btn btn-sm {{ $post->active ? 'btn-danger' : 'btn-success' }}">
                                    {{ $post->active ? 'Deactivate' : 'Activate' }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $posts->links() }}
        </div>
    @else
        <div class="alert alert-info text-center">
            No posts found.
        </div>
    @endif
</div>
