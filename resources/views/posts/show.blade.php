<!DOCTYPE html>
<html lang="en">
<head>
    @include('disign.nav')

    <title>Document</title>
    
<style>
    .post-container {
        padding: 40px 20px;
        max-width: 900px;
        margin: auto;
    }

    .post-title {
        font-size: 2rem;
        font-weight: bold;
        color: #2c3e50;
    }

    .card-header {
        font-size: 1.5rem;
        font-weight: 600;
        background-color: #007bff;
        color: white;
    }

    .card-title {
        font-size: 1.25rem;
        color: #555;
        margin-bottom: 15px;
    }

    .card-text {
        font-size: 1rem;
        color: #333;
        background: #f9f9f9;
        padding: 15px;
        border-radius: 5px;
    }

    .badge {
        margin-right: 5px;
        margin-top: 5px;
    }

    .post-footer {
        display: flex;
        justify-content: flex-end;
        background-color: #f5f5f5;
    }

    .btn-back {
        background-color: #6c757d;
        color: white;
    }

    .btn-back:hover {
        background-color: #5a6268;
    }

    .meta-info {
        margin-top: 20px;
        font-size: 1rem;
        line-height: 1.8;
    }

    .meta-info strong {
        color: #444;
    }

    hr {
        border-top: 1px solid #ddd;
    }
</style>

</head>
<body>
    <div class="post-container">
        <br>
    <h2 class="post-title">📄 Post Details: {{ $post->title }}</h2>

    <div class="card shadow-sm mt-4">
        <div class="card-header">
            {{ $post->title }}
        </div>

        <div class="card-body">
            <h5 class="card-title">{{ $post->summary }}</h5>
            <hr>

            <div class="card-text">
                {!! $post->description !!}
            </div>

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
                          @dd($sub->category->categoryImg)
                @endif
              
            @empty
                <span class="text-muted">None</span>
            @endforelse
        </p>


                <p><strong>Issue Date:</strong> {{ $post->issue_date }}</p>
            </div>
        </div>

        <div class="card-footer post-footer">
            <a href="{{ route('posts.index') }}" class="btn btn-back">← Back to All Posts</a>
        </div>
    </div>
</div>
</body>
</html>

