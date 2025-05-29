<form action="{{ route('post.add_post_process') }}" method="POST">
    @csrf
    <input type="hidden" name="user_id" value="{{ auth()->id() }}">

    <input type="text" name="title" placeholder="Title" required>
    <textarea name="summary" placeholder="Summary"></textarea>
    <textarea name="description" placeholder="Description"></textarea>
    
    <label>Active:</label>
    <select name="active">
        <option value="1">Yes</option>
        <option value="0">No</option>
    </select>

    <label>Subcategories:</label>
    <select name="subcategory_ids[]" multiple required>
        @foreach($subcategories as $sub)
            <option value="{{ $sub->id }}">{{ $sub->category->categoryName }} > {{ $sub->post_name }}</option>
        @endforeach
    </select>

    <label>Post Type:</label>
    <select name="post_type_id" required>
        <option value="1">Thread</option>
        <option value="2">Base</option>
    </select>

    <!-- <label>Tag:</label>
    <select name="tag_id">
        @foreach($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
    </select> -->

    <button type="submit">Submit</button>
</form>
