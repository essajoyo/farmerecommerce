<!-- resources/views/tests/create.blade.php -->




    <h1>Create a New Test</h1>

    <form action="{{ route('tests.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Test Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Test Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="mb-3">
            <label for="total_marks" class="form-label">Total Marks</label>
            <input type="number" class="form-control" id="total_marks" name="total_marks" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Test</button>
    </form>

