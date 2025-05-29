@include('disign.nav')
<br>

<div class="container mt-5">
    <div class="card shadow-sm rounded">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Pending Users</h4>
        </div>

        <div class="card-body">
            @if(session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Profession</th>
                            <th>Expertise</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->profession }}</td>
                                <td>{{ $user->expertise_level }}</td>
                                <td>
                                    <form action="{{ route('admin.user.approve', $user->id) }}" method="POST" class="d-inline-block">
                                        @csrf
                                        <button class="btn btn-success btn-sm" type="submit">
                                            <i class="bi bi-check-circle"></i> Approve
                                        </button>
                                    </form>

                                    <form action="{{ route('admin.user.reject', $user->id) }}" method="POST" class="d-inline-block">
                                        @csrf
                                        <button class="btn btn-danger btn-sm" type="submit">
                                            <i class="bi bi-x-circle"></i> Reject
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-muted">No pending users found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
