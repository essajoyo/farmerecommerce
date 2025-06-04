@include('disign.nav')
<style>
    /* Card and container styling */
    .card {
        border: none;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: scale(1.01);
    }

    .table-hover tbody tr:hover {
        background-color: #f1f5ff !important;
        transition: background-color 0.3s ease-in-out;
    }

    .table th {
        background-color: #3f51b5 !important;
        color: white;
        font-weight: 600;
        text-align: center;
    }

    .table td {
        vertical-align: middle;
    }

    .post-link {
        color: #333;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.2s ease;
    }

    .post-link:hover {
        color: #0d6efd;
        text-decoration: underline;
    }

    .btn-sm {
        transition: all 0.25s ease-in-out;
    }

    .btn-sm:hover {
        transform: scale(1.05);
        opacity: 0.9;
    }

    .badge {
        font-size: 0.75rem;
        padding: 0.4em 0.65em;
        border-radius: 10px;
    }

    h2 span {
        background: linear-gradient(45deg, #3f51b5, #5c6bc0);
        color: white;
        padding: 6px 12px;
        border-radius: 8px;
    }

    .pagination {
        margin-top: 30px;
    }
</style>

<div class="container py-5">
    <div class="text-center mb-4">
        <h2><span>📋 Posts List</span></h2>
    </div>

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    @if($posts->count() > 0)
        <div class="card mb-4">
            <div class="card-header bg-gradient text-white" style="background: linear-gradient(to right, #3f51b5, #5c6bc0);">
                <i class="fas fa-table me-2"></i> Beautiful Post Table
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Issue Date</th>
                                <th>Author</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>
                                        <a 
                                            {{ $post->title }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('posts.show', $post) }}" class="post-link">
                                            {{ \Carbon\Carbon::parse($post->issue_date)->format('F d, Y') }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('posts.author_related', $post->user->id) }}" class="post-link">
                                            {{ $post->user->name ?? 'Unknown' }}
                                        </a>
                                    </td>

                                    <td>
                                        {{ $post->user->roles->first()->role_name ?? 'No Role' }}
                                    </td>
                                    <td class="text-center">
                                        <span class="badge {{ $post->active ? 'bg-success' : 'bg-danger' }}">
                                            {{ $post->active ? 'Active' : 'Deactive' }}
                                        </span>
                                    </td>

                                    <td class="text-center">
                                        @php
                                            $roleName = auth()->user()->roles()->value('role_name');
                                        @endphp

                                      @if( $post->user_id === auth()->id())
                                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">✏️ Edit</a>
                                        @endif

                                        <a href="{{ route('posts.show', $post->post_id) }}" class="btn btn-info btn-sm">🔍 Detail</a>

                                        @if($roleName === 'admin')
                                            <a href="{{ route('posts.toggle_status', $post->post_id) }}"
                                               class="btn btn-sm {{ $post->active ? 'btn-danger' : 'btn-success' }}">
                                                {{ $post->active ? 'Deactivate' : 'Activate' }}
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    @else
        <div class="alert alert-info text-center">
            No posts found.
        </div>
    @endif
</div>
