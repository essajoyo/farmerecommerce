@include('disign.nav')

<br>
<div class="container">
    <br><br><br>
    <h2>Create Post</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Hidden Authenticated User ID -->
        <input type="hidden" name="user_id" value="{{ auth()->id() }}">

        <!-- Title -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <!-- Summary -->
        <div class="form-group">
            <label for="summary">Summary</label>
            <input type="text" name="summary" class="form-control" required>
        </div>

        <!-- Description -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="5" required></textarea>
        </div>

        <!-- Category -->
       <div class="mb-3">
        <label for="category_id" class="form-label">Select Categories</label>
        <select name="category_id[]" id="category_id" class="form-select" multiple required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
            @endforeach
        </select>
        </div>


      
     <div class="form-group">
    <label for="subcategory_id">Select Subcategories</label>
    <select name="subcategory_id[]" id="subcategory_id" class="form-control" multiple required>
        <!-- Options populated dynamically via JavaScript or backend -->
    </select>
</div>


        <!-- Post Type -->
        <div class="form-group">
            <label for="post_type_id">Post Type</label>
            <select name="post_type_id" class="form-control" required>
                <option value="">-- Select Post Type --</option>
                @foreach($postTypes as $type)
                    <option value="{{ $type->post_type_id }}">{{ $type->post_type }}</option>
                @endforeach
            </select>
        </div>

      

        <!-- Status -->
        <div class="form-group">
            <label for="active">Status</label>
            <select name="active" class="form-control" required>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

       <div class="mb-3">
            <label for="imgName" class="form-label">Upload Multiple Images</label>
            
            <input type="file" name="imgName[]" multiple class="form-control" />

        </div>


        <br>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>

<!-- jQuery to dynamically load subcategories based on selected category -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $('#category_id').change(function () {
            var categoryId = $(this).val();

            if (categoryId) {
                $.ajax({
                    url: '/get-subcategories/' + categoryId,
                    type: 'GET',
                    success: function (data) {
                        $('#subcategory_id').empty().append('<option value="">-- Select Subcategory --</option>');
                        $.each(data, function (key, subcategory) {
                            $('#subcategory_id').append('<option value="' + subcategory.id + '">' + subcategory.post_name + '</option>');
                        });
                    }
                });
            } else {
                $('#subcategory_id').empty().append('<option value="">-- Select Subcategory --</option>');
            }
        });
    });
</script>
