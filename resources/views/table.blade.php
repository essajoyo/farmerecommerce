<!DOCTYPE html>
<html lang="en">
<head>
    @include('disign.nav')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

            
            <style>
        /* Table Styling */
        #datatablesSimple {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #datatablesSimple th, #datatablesSimple td {
            padding: 12px 15px;
            text-align: left;
        }

        #datatablesSimple thead {
            background-color: #4e73df;
            color: white;
        }

        #datatablesSimple tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #datatablesSimple tbody tr:hover {
            background-color: #e1e1e1;
            cursor: pointer;
        }

        /* Table Header */
        #datatablesSimple th {
            font-weight: bold;
            text-transform: uppercase;
        }
    </style>




</head>
<body>
<div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Users</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>

               
                <!-- Data Table -->
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        DataTable Example
                    </div>
                    <div class="card-body">
                
                @if(session('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif

                       @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
             
         <table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>No</th> 
            <th>img</th>
            <th>Name</th>
            <th>Email</th>
            <th>Profession</th>
            <th>Status</th> <!-- New column -->
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $index => $user)
            <tr>
                <td>{{ ($users->currentPage() - 1) * $users->perPage() + $index + 1 }}</td>
                <td>
                    @if($user->image)
                        <img src="{{ asset('storage/' . $user->image) }}" alt="User Image" width="100">
                    @else
                        <span>No Image</span>
                    @endif
                </td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                @if($user->roles->isNotEmpty())
                    {{ $user->roles->pluck('role_name')->join(', ') }}  {{-- Show all roles joined by comma --}}
                @else
                    <span class="text-muted">User</span>
                @endif
                </td>


                <td>
                    @if($user->is_approve == 0)
                        <span class="badge bg-warning text-dark">Pending</span>
                    @elseif($user->is_approve == 1)
                        <span class="badge bg-success">Approved</span>
                    @elseif($user->is_approve == 2)
                        <span class="badge bg-danger">Rejected</span>
                    @else
                        <span class="badge bg-secondary">Unknown</span>
                    @endif
                </td>

                <td>
                    <!-- View Profile Form -->
                    <form action="{{ route('profile.post', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-success btn-sm">View Profile</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

                <div class="d-flex justify-content-end mt-3">
                    {{ $users->links('pagination::bootstrap-5') }}
                </div>

                    </div>
                </div>
            </div>

        
</body>
</html>



