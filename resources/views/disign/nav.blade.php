<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin</title>
      
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    
    <body class="sb-nav-fixed">
          <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            @auth
                <h3 class="navbar-brand ps-3">{{ auth()->user()->roles->first()->role_name ?? 'No Role' }}</h3>
            @endauth
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
                        <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button  align="center" type="submit" class="dropdown-item" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;">
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
                                 

                                <a class="nav-link" href='dashboard'>
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                                </a>
                                  <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProduct" aria-expanded="false" aria-controls="collapseProduct">
                                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                        Manage Product
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseProduct" aria-labelledby="headingProduct" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="{{ url('product/all_product') }}">All Product</a>
                                            <a class="nav-link" href="{{ url('product/add_product') }}">Add Product</a>
                                        </nav>
                                    </div>

                             
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCatalog" aria-expanded="false" aria-controls="collapseCatalog">
                                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                        Catalog
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="collapseCatalog" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="{{ route('admin.subcategory_create') }}">SubCategory</a>
                                            <a class="nav-link" href="{{ route('admin.category') }}">Category</a> 
                                            <a class="nav-link" href="{{ route('posts.create') }}">Add Post</a>
                                            <a class="nav-link" href="{{ route('posts.index') }}">Show Posts</a>
                                            <a class="nav-link" href="{{ route('posts.knowLedgeBase') }}">Knowledge Base</a>
                                        </nav>
                                    </div>
                              

                                <div class="sb-sidenav-menu-heading">Interface</div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Users Status
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>

                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                              <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin.reject-user')}}">Reject Users</a>
                                    <a class="nav-link" href="{{route('admin.approved-users')}}">Approval Users</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                           
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                   
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">   
                                        </nav>
                                    </div>
                                  
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                         <a class="nav-link" href="{{ route('admin.subcategory_create') }}">Post</a>
                                         <a class="nav-link" href="{{ route('admin.category') }}">Category</a> 
                                         <a class="nav-link" href="{{ route('posts.create') }}">Add Post</a>
                                         <a class="nav-link" href="{{ route('posts.index') }}">show Posts</a>
                                         <a class="nav-link" href="{{ route('posts.knowLedgeBase') }}">Knowledge Base</a>
                                         <a class="nav-link" href="{{ route('posts.discussion') }}">discussion Base</a>

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
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>