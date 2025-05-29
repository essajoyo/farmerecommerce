<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="dropdown-item" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;">
                                Logout
                            </button>
                        </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Users status
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                     <a class="nav-link" href="{{route('admin.reject-user')}}">Reject Users</a>
                                    <a class="nav-link" href="{{route('admin.approved-users')}}">Approval Users</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="{{route('registration')}}">register</a>

                            

                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                   
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                           
                                            <a class="nav-link" href="register">Register</a>
                                           
                                        </nav>
                                    </div>
                                  
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                             <a class="nav-link" href="{{route('academic-year.create')}}">Add Academic Year</a>
                                            <a class="nav-link" href="{{route('class.create')}}">class create</a>
                                            <a class="nav-link" href="{{route('registration')}}">register</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                           
                             <a class="nav-link" href="{{ route('admin.pending.users') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Pending Users
                            </a>
                            <a class="nav-link" href="{{route('table')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               Users
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script>
 
</body>
</html>



