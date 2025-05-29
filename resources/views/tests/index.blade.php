<!-- resources/views/tests/index.blade.php -->



    <h1>Tests List</h1>
    <a href="{{ route('tests.create') }}" class="btn btn-primary">Add New Test</a>

    @if(session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Subject</th>
                <th>Title</th>
                <th>Date</th>
                <th>Total Marks</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tests as $test)
                <tr>
                    <td>{{ $test->subject }}</td>
                    <td>{{ $test->title }}</td>
                    <td>{{ $test->date }}</td>
                    <td>{{ $test->total_marks }}</td>
                    <td>
                        <a href="{{ route('tests.edit', $test->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('tests.destroy', $test->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

