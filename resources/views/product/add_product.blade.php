@include('disign.nav')

<br>
<div class="container">
    <br><br><br>
    <h2>Add Product</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Product Name -->
        <div class="form-group">
            <label for="product">Product Name</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <!-- Description -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="4" required></textarea>
        </div>

        <!-- Price -->
        <div class="form-group">
            <label for="price">Price (Rs)</label>
            <input type="number" name="price" class="form-control" step="0.01" required>
        </div>

        <!-- Stock -->
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock" class="form-control" required>
        </div>

        <!-- Status -->
        <div class="form-group">
            <label for="active">Product Status</label>
            <select name="active" class="form-control" required>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <!-- Is Featured -->
        <div class="form-group">
            <label for="is_feature">Is Featured?</label>
            <select name="is_feature" class="form-control" required>
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>

        <!-- Is Shipping -->
        <div class="form-group">
            <label for="is_shipping">Requires Shipping?</label>
            <select name="is_shipping" class="form-control" required>
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>

        <!-- Category -->
        <div class="form-group">
            <label for="category_id">Select Category</label>
            <select name="category_id[]" id="category_id" class="form-control" multiple required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
                @endforeach
            </select>
        </div>

        <!-- Subcategory (loaded dynamically) -->
        <div class="form-group">
            <label for="subcategory_id">Select Subcategory</label>
            <select name="subcategory_id[]" id="subcategory_id" class="form-control" multiple required>
                <option value="">-- Select Subcategory --</option>
            </select>
        </div>

        <div class="form-group">
            <label for="feature_image">Feature Image</label>
            <input type="file" name="feature_image" class="form-control" required>
        </div>


       <div class="form-group">
        <label for="feature_images">Upload Extra Images</label>
        <input type="file" name="feature_images[]" class="form-control" multiple>
    </div>



        <br>
        <button type="submit" class="btn btn-success">Add Product</button>
    </form>
</div>

<!-- jQuery for dynamic subcategory loading -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $('#category_id').change(function () {
            var categoryIds = $(this).val();

            if (categoryIds) {
                $.ajax({
                    url: '/get-subcategories/' + categoryIds,
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
