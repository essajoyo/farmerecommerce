<!-- resources/views/tests/edit.blade.php -->


    <h1>Edit Test</h1>

    <form action="{{ route('tests.update', $test->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject', $test->subject) }}" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Test Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $test->title) }}" required>
        </div>
        <div class="
