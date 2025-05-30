@include('disign.nav')
<div class="container">
    <br>
    <hr>
    <h2>Create Category</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="categoryName" class="form-label">Category Name</label>
            <input type="text" name="categoryName" id="categoryName" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="categoryImg" class="form-label">Category Image</label>
            <input type="file" name="categoryImg" id="categoryImg" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Create Category</button>
    </form>
</div>

