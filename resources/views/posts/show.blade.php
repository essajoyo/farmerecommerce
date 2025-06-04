<!DOCTYPE html>
<html lang="en">
<head>
    @include('disign.nav')
    <title>Post Details</title>

    <style>
        .post-container { padding: 40px 20px; max-width: 900px; margin: auto; }
        .post-title { font-size: 2rem; font-weight: bold; color: #2c3e50; }
        .card-header { font-size: 1.5rem; font-weight: 600; background-color: #007bff; color: white; }
        .card-title { font-size: 1.25rem; color: #555; margin-bottom: 15px; }
        .card-text { font-size: 1rem; color: #333; background: #f9f9f9; padding: 15px; border-radius: 5px; }
        .badge { margin-right: 5px; margin-top: 5px; }
        .post-footer { display: flex; justify-content: space-between; background-color: #f5f5f5; padding: 10px 15px; }
        .btn-back { background-color: #6c757d; color: white; }
        .btn-back:hover { background-color: #5a6268; }
        .meta-info { margin-top: 20px; font-size: 1rem; line-height: 1.8; }
        .meta-info strong { color: #444; }
        .image-gallery img { max-width: 150px; margin: 10px 10px 0 0; border-radius: 5px; }
        .like-info { font-size: 0.9rem; margin-top: 10px; }
        hr { border-top: 1px solid #ddd; }
    </style>
</head>
<body>
<div class="post-container">
    <br>
    <h2 class="post-title">📄 Post Details: {{ $post->title }}</h2>

    <div class="card shadow-sm mt-4">
        <div class="card-header">{{ $post->title }}</div>

        <div class="card-body">
            <h5 class="card-title">{{ $post->summary }}</h5>
            <hr>

            <div class="card-text">{!! $post->description !!}</div>

            <div class="meta-info">
                <p><strong>Status:</strong>
                    @if($post->active)
                        <span class="badge bg-success">Active</span>
                    @else
                        <span class="badge bg-danger">Inactive</span>
                    @endif
                </p>

                <p><strong>Author:</strong> {{ optional($post->user)->name ?? 'Unknown' }}</p>

                <p><strong>Subcategories:</strong><br>
                    @forelse($post->subcategories as $sub)
                        <span class="badge bg-secondary">{{ $sub->post_name }}</span><br>
                        @if($sub->category && $sub->category->categoryImg)
                            <img src="{{ asset('storage/categories/' . $sub->category->categoryImg) }}"
                                 alt="{{ $sub->category->categoryName }}"
                                 style="max-width: 150px; margin: 10px 0; border-radius: 5px;">
                        @endif
                    @empty
                        <span class="text-muted">None</span>
                    @endforelse
                </p>

                <p><strong>Issue Date:</strong> {{ $post->issue_date }}</p>

               <hr>
           <p><strong>Post Images:</strong></p>
            <div class="row">

            
         @php
    $images = collect($post->images)->filter(function ($image) {
        return in_array(strtolower($image->extension), ['jpg', 'jpeg', 'png', 'gif', 'webp']);
    });

    $files = collect($post->images)->filter(function ($image) {
        return !in_array(strtolower($image->extension), ['jpg', 'jpeg', 'png', 'gif', 'webp']);
    });
@endphp

{{-- Image Section --}}
@if($images->isNotEmpty())
    <p><strong>Post Images:</strong></p>
    <div class="row">
        @foreach($images as $image)
            @php
                $filePath = asset('storage/post_images/' . $image->img_name . '.' . $image->extension);
            @endphp
            <div class="col-md-3 text-center mb-3">
                <img src="{{ $filePath }}" class="img-fluid rounded mb-2" alt="Image">
                <br>
                <a href="{{ $filePath }}" class="btn btn-sm btn-outline-primary mt-1" download>
                    ⬇️ Download
                </a>
            </div>
        @endforeach
    </div>
@endif

{{-- File Section --}}
@if($files->isNotEmpty())
    <p><strong>Post Files:</strong></p>
    <div class="row">
        @foreach($files as $file)
            @php
                $filePath = asset('storage/post_images/' . $file->img_name . '.' . $file->extension);
            @endphp
            <div class="col-md-3 text-center mb-3">
                <div style="font-size: 3rem;">📄</div>
                <p class="text-muted">{{ $file->img_name . '.' . $file->extension }}</p>
                <a href="{{ $filePath }}" class="btn btn-sm btn-outline-primary mt-1" download>
                    ⬇️ Download
                </a>
            </div>
        @endforeach
    </div>
@endif

@if($images->isEmpty() && $files->isEmpty())
    <div class="col-12 text-muted">No files or images uploaded for this post.</div>
@endif



              
                <form action="{{ route('post.like', $post->post_id) }}" method="POST" class="mt-3">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-sm">
                        ❤️ Like ({{ $post->likes->count() }})
                    </button>
                </form>

                {{-- ✅ SHOW USERS WHO LIKED --}}
                @if($post->likes->count())
                    <div class="like-info">
                        <strong>Liked by:</strong>
                        {{ $post->likes->pluck('user.name')->implode(', ') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="card-footer post-footer">
            <a href="{{ route('posts.index') }}" class="btn btn-back">← Back to All Posts</a>
        </div>
    </div>
</div>
</body>
</html>

