<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Item - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="{{ asset('css/styl.css') }}">

        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                       <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('admin') }}">Home</a>
                        </li>


                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                       @php
                            $cart = session('cart');
                            $cartCount = is_array($cart) ? array_sum(array_column($cart, 'quantity')) : 0;
                        @endphp

                        <a class="btn btn-outline-dark" href="{{ route('cart.view') }}">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">{{ $cartCount }}</span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Product section-->
       <section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">

            <div class="col-md-6">
                {{-- Main Image with ID for JS --}}
                <img id="mainImage" class="card-img-top mb-3"  
                     src="{{ asset('storage/' . $product->feature_image) }}" 
                     width="400" />
            </div>

            <div class="col-md-4 ">
                <div class="small mb-1 ms-5 ">SKU: PRD-{{ $product->id }}</div>
                <h1 class="display-5 fw-bolder ms-5" >{{ $product->product }}</h1>
                <div class="fs-5 mb-3 ms-5">
                    @if($product->status == 1)
                        <span class="text-decoration-line-through text-muted">Rs {{ $product->price + 10 }}</span>
                    @endif
                    <span>Rs {{ $product->price }}</span>
                </div>
                <p class="lead ms-5">{{ $product->description }}</p>

                @if($product->stock > 0)
                   <form action="{{ route('cart.add', $product->id) }}" method="POST" class="d-flex">
                        @csrf
                      <input  
                            name="quantity" 
                            class="form-control text-center me-3 ms-5" 
                            type="number" 
                            value="1" 
                            min="1" 
                            max="{{ $product->stock }}" 
                            style="max-width: 4rem" 
                        />

                        <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Add to cart
                        </button>
                    </form>
                @else
                    <div class="alert alert-danger fw-bold">Out of Stock</div>
                @endif
            </div>
            @if(session('error'))
                <div class="alert alert-danger mt-2">{{ session('error') }}</div>
            @endif

            @if(session('success'))
                <div class="alert alert-success mt-2">{{ session('success') }}</div>
            @endif


            {{-- Thumbnails slider --}}
            <div class="d-flex flex-wrap gap-2 mt-4">
                {{-- First show feature image thumbnail --}}
                <img class="border p-1 thumbnail" 
                     src="{{ asset('storage/' . $product->feature_image) }}" 
                     width="100" height="100"
                     data-img="{{ asset('storage/' . $product->feature_image) }}" />

                {{-- Other product images --}}
                @foreach($product->images as $img)
                    <img class="border p-1 thumbnail"  
                         src="{{ asset('storage/' . $img->img_name) }}" 
                         width="100" height="100"
                         data-img="{{ asset('storage/' . $img->img_name) }}" />
                @endforeach
            </div>

        </div>
    </div>
</section>

<script>
    // Wait till DOM loaded
    document.addEventListener('DOMContentLoaded', function () {
        // Select main image
        const mainImage = document.getElementById('mainImage');
        // Select all thumbnails
        const thumbnails = document.querySelectorAll('.thumbnail');

        // Loop through thumbnails and add click event
        thumbnails.forEach(thumb => {
            thumb.addEventListener('click', function () {
                // Get the image URL from data-img attribute
                const newSrc = this.getAttribute('data-img');
                // Change main image src
                mainImage.src = newSrc;
            });
        });
    });
</script>

        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related products</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Special Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Sale Item</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Popular Item</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
