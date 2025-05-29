@include('disign.nav')
<br>
<div class="container py-5">
    <div class="text-center mb-5">
        <br>
        <h2 class="fw-bold">📋 Posts List</h2>
    </div>

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    @forelse($posts as $post)
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">{{ $post->title }}</h5>
                <small>
                    <strong>👤 {{ $post->user->name ?? 'Unknown' }}</strong>
                    <span class="badge bg-light text-dark ms-2">{{ $post->user->role ?? 'Admin' }}</span>
                </small>
            </div>
            <div class="card-body">
                <p class="mb-1"><strong>📌 Summary:</strong> {{ $post->summary }}</p>
                <p class="mb-1"><strong>📅 Issue Date:</strong> {{ \Carbon\Carbon::parse($post->issue_date)->format('F d, Y') }}</p>
                <p class="mb-0"><strong>📂 Categories & Subcategories:</strong>
                    @forelse($post->subcategories as $sub)
                        <span class="badge bg-secondary me-1">
                            {{ $sub->category->categoryName }} > {{ $sub->subcategoryName }}
                        </span>
                    @empty
                        <span class="text-muted">None assigned</span>
                    @endforelse
                </p>
            </div>
        </div>
    @empty
        <div class="alert alert-info text-center">
            No posts found.
        </div>
    @endforelse

    <div class="d-flex justify-content-center mt-4">
        {{ $posts->links() }}
    </div>
</div>
