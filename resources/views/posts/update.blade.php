<!DOCTYPE html>
<html lang="en">
<head>
    @include('disign.nav')

    <title>Edit Post</title>
    
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

    .form-control {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    textarea.form-control {
        resize: vertical;
        min-height: 150px;
    }

    .badge {
        margin-right: 5px;
        margin-top: 5px;
    }

    .post-footer {
        display: flex;
        justify-content: space-between;
        background-color: #f5f5f5;
        padding: 15px;
    }

    .btn-back {
        background-color: #6c757d;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
    }

    .btn-back:hover {
        background-color: #5a6268;
    }

    .btn-submit {
        background-color: #28a745;
        color: white;
        padding: 10px 25px;
        border-radius: 5px;
        border: none;
    }

    .btn-submit:hover {
        background-color: #218838;
    }
</style>
</head>

<body>
    <div class="post-container">
        <h2 class="post-title">📝 Edit Post: {{ $post->title }}</h2>
<form action="{{ route('posts.update', $post->post_id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="card shadow-sm mt-4">
                <div class="card-header">
                    Edit Post Details
                </div>

                <div class="card-body">
                    <label><strong>Title:</strong></label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>

                    <label><strong>Summary:</strong></label>
                    <input type="text" name="summary" class="form-control" value="{{ old('summary', $post->summary) }}" required>

                    <label><strong>Description:</strong></label>
                    <textarea name="description" class="form-control">{!! old('description', $post->description) !!}</textarea>

                    <label><strong>Status:</strong></label>
                    <select name="active" class="form-control">
                        <option value="1" {{ $post->active ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ !$post->active ? 'selected' : '' }}>Inactive</option>
                    </select>

                    <label><strong>Issue Date:</strong></label>
                    <input type="date" name="issue_date" class="form-control" value="{{ old('issue_date', $post->issue_date) }}" required>
                </div>

                <div class="card-footer post-footer">
                    <a href="{{ route('posts.index') }}" class="btn-back">← Cancel</a>
                    <button type="submit" class="btn-submit">💾 Save Changes</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
