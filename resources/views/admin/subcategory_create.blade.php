
@include('disign.nav')
<div class="container mt-4">
    <h4 class="mb-4">Create Subcategory</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.subcategory_store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="category_id" class="form-label">Select Category</label>
            <select name="category_id" id="category_id" class="form-select" required>
                <option value="">-- Choose Category --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="post_name" class="form-label">Subcategory Name</label>
            <input type="text" name="post_name" id="post_name" class="form-control" placeholder="Enter subcategory name" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Subcategory</button>
    </form>
</div>
