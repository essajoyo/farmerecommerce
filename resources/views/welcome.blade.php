<!DOCTYPE html>
<html lang="en">

<head>
  <title>Stylish - </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="TemplatesJungle">
  <meta name="keywords" content="Online Store">
  <meta name="description" content="Stylish - Shoes Online Store HTML Template">

  <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
  <link rel="stylesheet" href="{{ asset('stylee.css') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,900;1,900&family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
    rel="stylesheet">
</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" id="shopping-carriage" viewBox="0 0 24 24" fill="none">
      <path
        d="M5 22H19C20.103 22 21 21.103 21 20V9C21 8.73478 20.8946 8.48043 20.7071 8.29289C20.5196 8.10536 20.2652 8 20 8H17V7C17 4.243 14.757 2 12 2C9.243 2 7 4.243 7 7V8H4C3.73478 8 3.48043 8.10536 3.29289 8.29289C3.10536 8.48043 3 8.73478 3 9V20C3 21.103 3.897 22 5 22ZM9 7C9 5.346 10.346 4 12 4C13.654 4 15 5.346 15 7V8H9V7ZM5 10H7V12H9V10H15V12H17V10H19L19.002 20H5V10Z"
        fill="black" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="quick-view" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396l1.414-1.414l-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8s3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6s-6-2.691-6-6s2.691-6 6-6z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="shopping-cart" viewBox="0 0 24 24" fill="none">
      <path
        d="M21 4H2V6H4.3L7.582 15.025C7.79362 15.6029 8.1773 16.1021 8.68134 16.4552C9.18539 16.8083 9.78556 16.9985 10.401 17H19V15H10.401C9.982 15 9.604 14.735 9.461 14.342L8.973 13H18.246C19.136 13 19.926 12.402 20.169 11.549L21.962 5.275C22.0039 5.12615 22.0109 4.96962 21.9823 4.81763C21.9537 4.66565 21.8904 4.52234 21.7973 4.39889C21.7041 4.27544 21.5837 4.1752 21.4454 4.106C21.3071 4.0368 21.1546 4.00053 21 4ZM18.246 11H8.246L6.428 6H19.675L18.246 11Z"
        fill="black" />
      <path
        d="M10.5 21C11.3284 21 12 20.3284 12 19.5C12 18.6716 11.3284 18 10.5 18C9.67157 18 9 18.6716 9 19.5C9 20.3284 9.67157 21 10.5 21Z"
        fill="black" />
      <path
        d="M16.5 21C17.3284 21 18 20.3284 18 19.5C18 18.6716 17.3284 18 16.5 18C15.6716 18 15 18.6716 15 19.5C15 20.3284 15.6716 21 16.5 21Z"
        fill="black" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="nav-icon" viewBox="0 0 16 16">
      <path
        d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 16 16">
      <path
        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 16 16">
      <path
        d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 24 24">
      <path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 24 24">
      <path fill="currentColor" d="M19 12.998H5v-2h14z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="dropdown" viewBox="0 0 24 24">
      <path fill="currentColor" d="m7 10l5 5l5-5H7Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M12 2a5 5 0 1 0 5 5a5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3a3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M13.3 17.275q-.3-.3-.288-.725t.313-.725L16.15 13H5q-.425 0-.713-.288T4 12q0-.425.288-.713T5 11h11.15L13.3 8.15q-.3-.3-.3-.713t.3-.712q.3-.3.713-.3t.712.3L19.3 11.3q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.687.275t-.713-.3Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="facebook" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M9.198 21.5h4v-8.01h3.604l.396-3.98h-4V7.5a1 1 0 0 1 1-1h3v-4h-3a5 5 0 0 0-5 5v2.01h-2l-.396 3.98h2.396v8.01Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="twitter" viewBox="0 0 512 512">
      <path fill="currentColor" d="M496 109.5a201.8 201.8 0 0 1-56.55 15.3a97.51 97.51 0 0 0 43.33-53.6a197.74 197.74 0 0 1-62.56 23.5A99.14 99.14 0 0 0 348.31 64c-54.42 0-98.46 43.4-98.46 96.9a93.21 93.21 0 0 0 2.54 22.1a280.7 280.7 0 0 1-203-101.3A95.69 95.69 0 0 0 36 130.4c0 33.6 17.53 63.3 44 80.7A97.5 97.5 0 0 1 35.22 199v1.2c0 47 34 86.1 79 95a100.76 100.76 0 0 1-25.94 3.4a94.38 94.38 0 0 1-18.51-1.8c12.51 38.5 48.92 66.5 92.05 67.3A199.59 199.59 0 0 1 39.5 405.6a203 203 0 0 1-23.5-1.4A278.68 278.68 0 0 0 166.74 448c181.36 0 280.44-147.7 280.44-275.8c0-4.2-.11-8.4-.31-12.5A198.48 198.48 0 0 0 496 109.5Z"/>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="youtube" viewBox="0 0 32 32">
      <path fill="currentColor"
        d="M29.41 9.26a3.5 3.5 0 0 0-2.47-2.47C24.76 6.2 16 6.2 16 6.2s-8.76 0-10.94.59a3.5 3.5 0 0 0-2.47 2.47A36.13 36.13 0 0 0 2 16a36.13 36.13 0 0 0 .59 6.74a3.5 3.5 0 0 0 2.47 2.47c2.18.59 10.94.59 10.94.59s8.76 0 10.94-.59a3.5 3.5 0 0 0 2.47-2.47A36.13 36.13 0 0 0 30 16a36.13 36.13 0 0 0-.59-6.74ZM13.2 20.2v-8.4l7.27 4.2Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="instagram" viewBox="0 0 256 256">
      <path fill="currentColor"
        d="M128 80a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Zm48-136H80a56.06 56.06 0 0 0-56 56v96a56.06 56.06 0 0 0 56 56h96a56.06 56.06 0 0 0 56-56V80a56.06 56.06 0 0 0-56-56Zm40 152a40 40 0 0 1-40 40H80a40 40 0 0 1-40-40V80a40 40 0 0 1 40-40h96a40 40 0 0 1 40 40ZM192 76a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="pinterest" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M9.04 21.54c.96.29 1.93.46 2.96.46a10 10 0 0 0 10-10A10 10 0 0 0 12 2A10 10 0 0 0 2 12c0 4.25 2.67 7.9 6.44 9.34c-.09-.78-.18-2.07 0-2.96l1.15-4.94s-.29-.58-.29-1.5c0-1.38.86-2.41 1.84-2.41c.86 0 1.26.63 1.26 1.44c0 .86-.57 2.09-.86 3.27c-.17.98.52 1.84 1.52 1.84c1.78 0 3.16-1.9 3.16-4.58c0-2.4-1.72-4.04-4.19-4.04c-2.82 0-4.48 2.1-4.48 4.31c0 .86.28 1.73.74 2.3c.09.06.09.14.06.29l-.29 1.09c0 .17-.11.23-.28.11c-1.28-.56-2.02-2.38-2.02-3.85c0-3.16 2.24-6.03 6.56-6.03c3.44 0 6.12 2.47 6.12 5.75c0 3.44-2.13 6.2-5.18 6.2c-.97 0-1.92-.52-2.26-1.13l-.67 2.37c-.23.86-.86 2.01-1.29 2.7v-.03Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396l1.414-1.414l-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8s3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6s-6-2.691-6-6s2.691-6 6-6z" />
    </symbol>
  </svg>


  <div class="modal fade" id="modallong" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-fullscreen-md-down modal-md modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5">Cart</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="shopping-cart">
            <div class="shopping-cart-content">
              <div class="mini-cart cart-list p-0 mt-3">
                <div class="mini-cart-item d-flex border-bottom pb-3">
                  <div class="col-lg-2 col-md-3 col-sm-2 me-4">
                    <a href="#" title="product-image">
                      <!-- <img src="images/single-product-thumb1.jpg" class="img-fluid" alt="single-product-item"> -->
                      <img src="{{ asset('storage/user_images/single-product-thumb1.jpg') }}" alt="User Image" class="img-fluid">

                    </a>
                  </div>
                  <div class="col-lg-9 col-md-8 col-sm-8">
                    <div class="product-header d-flex justify-content-between align-items-center mb-3">
                      <h4 class="product-title fs-6 me-5">Sport Shoes For Men</h4>
                      <a href="" class="remove" aria-label="Remove this item" data-product_id="11913"
                        data-cart_item_key="abc" data-product_sku="">
                        <svg class="close">
                          <use xlink:href="#close"></use>
                        </svg>
                      </a>
                    </div>
                    <div class="quantity-price d-flex justify-content-between align-items-center">
                      <div class="input-group product-qty">
                        <button type="button"
                          class="quantity-left-minus btn btn-light rounded-0 rounded-start btn-number"
                          data-type="minus">
                          <svg width="16" height="16">
                            <use xlink:href="#minus"></use>
                          </svg>
                        </button>
                        <input type="text" name="quantity" class="form-control input-number quantity" value="1">
                        <button type="button" class="quantity-right-plus btn btn-light rounded-0 rounded-end btn-number"
                          data-type="plus">
                          <svg width="16" height="16">
                            <use xlink:href="#plus"></use>
                          </svg>
                        </button>
                      </div>
                      <div class="price-code">
                        <span class="product-price fs-6">$99</span>
                      </div>
                    </div>
                    <!-- quantity-price -->
                  </div>
                </div>
              </div>
              <div class="mini-cart cart-list p-0 mt-3">
                <div class="mini-cart-item d-flex border-bottom pb-3">
                  <div class="col-lg-2 col-md-3 col-sm-2 me-4">
                    <a href="#" title="product-image">
                      <!-- <img src="images/single-product-thumb2.jpg" class="img-fluid" alt="single-product-item"> -->
                    <img src="{{ asset('storage/user_images/single-product-thumb2.jpg') }}" alt="User Image"  class="img-fluid">

                     
                    </a>
                  </div>
                  <div class="col-lg-9 col-md-8 col-sm-8">
                    <div class="product-header d-flex justify-content-between align-items-center mb-3">
                      <h4 class="product-title fs-6 me-5">Brand Shoes For Men</h4>
                      <a href="" class="remove" aria-label="Remove this item" data-product_id="11913"
                        data-cart_item_key="abc" data-product_sku="">
                        <svg class="close">
                          <use xlink:href="#close"></use>
                        </svg>
                      </a>
                    </div>
                    <div class="quantity-price d-flex justify-content-between align-items-center">
                      <div class="input-group product-qty">
                        <button type="button"
                          class="quantity-left-minus btn btn-light rounded-0 rounded-start btn-number"
                          data-type="minus">
                          <svg width="16" height="16">
                            <use xlink:href="#minus"></use>
                          </svg>
                        </button>
                        <input type="text" name="quantity" class="form-control input-number quantity" value="1">
                        <button type="button" class="quantity-right-plus btn btn-light rounded-0 rounded-end btn-number"
                          data-type="plus">
                          <svg width="16" height="16">
                            <use xlink:href="#plus"></use>
                          </svg>
                        </button>
                      </div>
                      <div class="price-code">
                        <span class="product-price fs-6">$99</span>
                      </div>
                    </div>
                    <!-- quantity-price -->
                  </div>
                </div>
              </div>
              <!-- cart-list -->
              <div class="mini-cart-total d-flex justify-content-between py-4">
                <span class="fs-6">Subtotal:</span>
                <span class="special-price-code">
                  <span class="price-amount amount fs-6" style="opacity: 1;">
                    <bdi>
                      <span class="price-currency-symbol">$</span>198.00 </bdi>
                  </span>
                </span>
              </div>
              <div class="modal-footer my-4 justify-content-center">
                <button type="button" class="btn btn-red hvr-sweep-to-right dark-sweep">View Cart</button>
                <button type="button"
                  class="btn btn-outline-gray hvr-sweep-to-right dark-sweep">Checkout</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- cart view -->

 <div class="modal fade" id="modallogin" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-fullscreen-md-down modal-md modal-dialog-centered" role="document">
      <div class="modal-content p-4">
        <div class="modal-header mx-auto border-0">
          <h2 class="modal-title fs-3 fw-normal">Login</h2>
        </div>
        <div class="modal-body">
          <div class="login-detail">
            <div class="login-form p-0">
              <div class="col-lg-12 mx-auto">
               <form action="{{route('login-user')}}" method="post">
                @csrf
                 
                    <input type="text"  name="email" placeholder="Enter your email"   class="mb-3 ps-3 text-input">
                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
              
                    <input type="password"  name="password" placeholder="Enter your password" class="mb-3 ps-3 text-input">
                    <span class="text-danger">@error('password'){{ $message }}@enderror</span>

                   <div class="checkbox d-flex justify-content-between mt-4">
                    <p class="checkbox-form">
                      <label class="">
                        <input name="rememberme" type="checkbox" id="remember-me" value="forever"> Remember me </label>
                    </p>
                    <p class="lost-password">
                      <a href="#">Forgot your password?</a>
                    </p>
                  </div>
                  <div class="d-grid mb-3">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
                </form>
              </div>
            </div>
            <div class="modal-footer mt-5 d-flex justify-content-center">
             
              <button type="button"
                class="btn btn-outline-gray hvr-sweep-to-right dark-sweep">Register</button>
            </div>
                  <button
  type="button"
  class="btn btn-primary"
  data-bs-dismiss="modal"
  onclick="forceCloseModalCleanup()"
>
  Close
</button>


          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login -->
   <!-- register -->

<div class="modal fade" id="modalRegister" tabindex="-1" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered" role="document">
    <div class="modal-content p-4">
      <div class="modal-header border-0">
        <h2 class="modal-title fs-3 fw-normal mx-auto">User Registration</h2>
      </div>
      <div class="modal-body">
        <div class="container">
          @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
          @endif
          @if(Session::has('fail'))
            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
          @endif
          @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
          @endif

          <form action="{{ route('register-user') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-6 mb-3">
                <label>Full Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter your name">
                <span class="text-danger">@error('name'){{ $message }}@enderror</span>
              </div>

              <div class="col-md-6 mb-3">
                <label>Email Address</label>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email">
                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
              </div>

              <div class="col-md-6 mb-3">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password">
                <span class="text-danger">@error('password'){{ $message }}@enderror</span>
              </div>

              <div class="col-md-6 mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" placeholder="Enter your phone">
                <span class="text-danger">@error('mobile'){{ $message }}@enderror</span>
              </div>

              <div class="col-md-6 mb-3">
                <label>Profession</label>
                <select name="role" class="form-control">
                  <option value="">-- Select Profession --</option>
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
                  <option value="farmer">Farmer</option>
                  <option value="academics">Academics</option>
                  <option value="consultant">Consultant</option>
                </select>
                <span class="text-danger">@error('role'){{ $message }}@enderror</span>
              </div>

              <div class="col-md-6 mb-3">
                <label>Expertise Level</label>
                <select name="expertise_level" class="form-control">
                  <option value="">-- Select Expertise Level --</option>
                  <option value="beginner">Beginner</option>
                  <option value="intermediate">Intermediate</option>
                  <option value="expert">Expert</option>
                </select>
                <span class="text-danger">@error('expertise_level'){{ $message }}@enderror</span>
              </div>

              <div class="col-md-6 mb-3">
                <label>Profile Picture</label>
                <input type="file" class="form-control" name="image">
                <span class="text-danger">@error('image'){{ $message }}@enderror</span>
              </div>
                <div class="col-md-6 mb-3">
                <label>Country</label>
                <select name="country_id" id="country" class="form-control">
                  <option value="">-- Select Country --</option>
                  @foreach($countries as $country)
                    <option value="{{ $country->country_id }}">{{ $country->country_name }}</option>
                  @endforeach
                </select>
                <span class="text-danger">@error('country_id'){{ $message }}@enderror</span>
              </div>

            
              <div class="col-md-6 mb-3">
                <label>State</label>
                <select name="state_id" id="state" class="form-control">
                  <option value="">-- Select State --</option>
                </select>
                <span class="text-danger">@error('state_id'){{ $message }}@enderror</span>
              </div>

              <div class="col-md-6 mb-3">
                <label>City</label>
                <select name="city_id" id="city" class="form-control">
                  <option value="">-- Select City --</option>
                </select>
                <span class="text-danger">@error('city_id'){{ $message }}@enderror</span>
              </div>
            </div>

            <div class="d-grid mt-3">
              <button type="submit" class="btn btn-primary">Register</button>
            </div>

            <div class="text-center mt-3">
              <a href="#" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modallogin">Already registered? Login here</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
  $('#country').on('change', function () {
    let country_id = $(this).val();
    if (country_id) {
      $.ajax({
        url: "{{ url('/get-states') }}/" + country_id,
        type: "GET",
        success: function (res) {
          $('#state').html('<option value="">-- Select State --</option>');
          $('#city').html('<option value="">-- Select City --</option>');
          $.each(res, function (key, value) {
            $('#state').append('<option value="' + value.state_id + '">' + value.state_name + '</option>');
          });
        }
      });
    }
  });

   $('#state').on('change', function () {
    let state_id = $(this).val();
    if (state_id) {
      $.ajax({
        url: "{{ url('/get-cities') }}/" + state_id,
        type: "GET",
        success: function (res) {
          $('#city').html('<option value="">-- Select City --</option>');
          $.each(res, function (key, value) {
            $('#city').append('<option value="' + value.city_id + '">' + value.city + '</option>');
          });
        }
      });
    }
  });
</script>  


  <header id="header" class="site-header text-black">
    <div class="header-top border-bottom py-2">
      <div class="container-lg">
        <div class="row justify-content-evenly">
          <div class="col">
            <ul class="social-links list-unstyled d-flex m-0">
              <li class="pe-2">
                <a href="#">
                  <svg class="facebook" width="20" height="20">
                    <use xlink:href="#facebook"></use>
                  </svg>
                </a>
              </li>
              <li class="pe-2">
                <a href="#">
                  <svg class="instagram" width="20" height="20">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </a>
              </li>
              <li class="pe-2">
                <a href="#">
                  <svg class="youtube" width="20" height="20">
                    <use xlink:href="#youtube"></use>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg class="pinterest" width="20" height="20">
                    <use xlink:href="#pinterest"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
          <div class="col d-none d-md-block">
            <p class="text-center text-black m-0"><strong>Special Offer</strong>: Free Shipping on all the orders above $100
            </p>
          </div>
          <div class="col">
            <ul class="d-flex justify-content-end gap-3 list-unstyled m-0">
              <li>
                <a href="#">Contact</a>
              </li>
              <li>
                <a href="#">Cart</a>
              </li>
               <li>
               <a href="#" data-bs-toggle="modal" data-bs-target="#modalRegister">Register</a>

              </li>
              <li>
               <a href="#" data-bs-toggle="modal" data-bs-target="#modallogin">Login</a>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button  align="center" type="submit" class="dropdown-item" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;">
                                Logout
                            </button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <nav id="header-nav" class="navbar navbar-expand-lg">
      <div class="container-lg">
        <a class="navbar-brand" href="index.html">
          <!-- <img src="images/main-logo.png" class="logo" alt="logo"> -->
          <img src="{{ asset('storage/user_images/main-logo.png') }}" class="logo"  alt="logo">

        </a>
        <button class="navbar-toggler d-flex d-lg-none order-3 border-0 p-1 ms-2" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <svg class="navbar-icon">
            <use xlink:href="#navbar-icon"></use>
          </svg>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar">
          <div class="offcanvas-header px-4 pb-0">
            <a class="navbar-brand ps-3" href="index.html">
             
                  <!-- <img src="{{ asset('images/main-logo.png') }}" class="logo" alt="User Image" width="100"> -->
                  <img src="{{ asset('storage/user_images/main-logo.png') }}" class="logo"alt="User Image" >
            </a>
            <button type="button" class="btn-close btn-close-black p-5" data-bs-dismiss="offcanvas" aria-label="Close"
              data-bs-target="#bdNavbar"></button>
          </div>
          <div class="offcanvas-body">
            <ul id="navbar" class="navbar-nav fw-bold justify-content-end align-items-center flex-grow-1">
              <li class="nav-item dropdown">
                <a class="nav-link me-5 active dropdown-toggle border-0" href="#" data-bs-toggle="dropdown"
                  aria-expanded="false">Home</a>
                <ul class="dropdown-menu fw-bold">
                  <li>
                    <a href="index.html" class="dropdown-item">Home V1</a>
                  </li>
                  <li>
                    <a href="index.html" class="dropdown-item">Home V2 </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link me-5" href="#">Men</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-5" href="#">Women</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link me-5 active dropdown-toggle border-0" href="#" data-bs-toggle="dropdown"
                  aria-expanded="false">Page</a>
                <ul class="dropdown-menu fw-bold">
                  <li>
                    <a href="index.html" class="dropdown-item">About Us </a>
                  </li>
                  <li>

                    <a class="dropdown-item" href="{{ url('product/all_product') }}">Shop </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="index.html">Blog </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="index.html">Single Product </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="index.html">Single Post </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="index.html">Styles </a>
                  </li>
                  <li>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modallong" class="dropdown-item">cart</a>
                  </li>
                  <li>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modallogin" class="dropdown-item">Login</a>

                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link me-5" href="{{ url('product/all_product') }}">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-5" href="#">Sale</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="user-items ps-0 ps-md-5">
          <ul class="d-flex justify-content-end list-unstyled align-item-center m-0">
            <li class="pe-3">
              <a href="login" data-bs-toggle="modal" data-bs-target="#modallogin" class="border-0">
                <svg class="user" width="24" height="24">
                  <use xlink:href="#user"></use>
                </svg>
              </a>
            </li>
            <li class="pe-3">
              <a href="#" data-bs-toggle="modal" data-bs-target="#modallong" class="border-0">
                <svg class="shopping-cart" width="24" height="24">
                  <use xlink:href="#shopping-cart"></use>
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="search-item border-0" data-bs-toggle="collapse" data-bs-target="#search-box" aria-label="Toggle navigation">
                <svg class="search" width="24" height="24">
                  <use xlink:href="#search"></use>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section id="intro" class="position-relative mt-4">
    <div class="container-lg">
      <div class="swiper main-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="card d-flex flex-row align-items-end border-0 large jarallax-keep-img">
              
                  <!-- <img src="{{ asset('images/card-image1.jpg') }}" class="img-fluid jarallax-img" alt="User Image" width="100"> -->
                  <img src="{{ asset('storage/user_images/1.jpg') }}"  class="img-fluid jarallax-img" alt="User Image" >

              <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5">
                <h2 class="card-title display-3 light">Stylish shoes for Women</h2>
                <a href="index.html"
                  class="text-uppercase light mt-3 d-inline-block text-hover fw-bold light-border">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="row g-4">
              <div class="col-lg-12 mb-4">
                <div class="card d-flex flex-row align-items-end border-0 jarallax-keep-img">
                  <!-- <img src="images/card-image2.jpg" alt="shoes" class="img-fluid jarallax-img"> -->
                  <!-- <img src="{{ asset('images/card-image2.jpg') }}" class="img-fluid jarallax-img" > -->
                  <img src="{{ asset('storage/user_images/2.jpg') }}" class="img-fluid jarallax-img" alt="User Image" >

                  <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5">
                    <h2 class="card-title style-2 display-4 light">Sports Wear</h2>
                    <a href="index.html"
                      class="text-uppercase light mt-3 d-inline-block text-hover fw-bold light-border">Shop Now</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="card d-flex flex-row align-items-end border-0 jarallax-keep-img">
                  <!-- <img src="images/card-image3.jpg" alt="shoes" class="img-fluid jarallax-img"> -->
                  <img src="{{ asset('storage/user_images/card-image3.jpg') }}"  class="img-fluid jarallax-img" alt="User Image" >

                  <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5">
                    <h2 class="card-title style-2 display-4 light">Fashion Shoes</h2>
                    <a href="index.html"
                      class="text-uppercase light mt-3 d-inline-block text-hover fw-bold light-border">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card d-flex flex-row align-items-end border-0 large jarallax-keep-img">
              <!-- <img src="images/card-image4.jpg" alt="shoes" class="img-fluid jarallax-img"> -->
              <img src="{{ asset('storage/user_images/card-image4.jpg') }}"  class="img-fluid jarallax-img" alt="User Image" >

              <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5">
                <h2 class="card-title display-3 light">Stylish shoes for men</h2>
                <a href="index.html"
                  class="text-uppercase light mt-3 d-inline-block text-hover fw-bold light-border">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="row g-4">
              <div class="col-lg-12 mb-4">
                <div class="card d-flex flex-row align-items-end border-0 jarallax-keep-img">
                  <!-- <img src="images/card-image5.jpg" alt="shoes" class="img-fluid jarallax-img"> -->
                  <img src="{{ asset('storage/user_images/card-image5.jpg') }}" class="img-fluid jarallax-img" alt="User Image">

                  <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5">
                    <h2 class="card-title style-2 display-4 light">Men Shoes</h2>
                    <a href="index.html"
                      class="text-uppercase light mt-3 d-inline-block text-hover fw-bold light-border">Shop Now</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="card d-flex flex-row align-items-end border-0 jarallax-keep-img">
                  <!-- <img src="images/card-image6.jpg" alt="shoes" class="img-fluid jarallax-img"> -->
                  <img src="{{ asset('storage/user_images/card-image6.jpg') }}" alt="User Image"  class="img-fluid jarallax-img">

                  <div class="cart-concern p-3 m-3 p-lg-5 m-lg-5">
                    <h2 class="card-title style-2 display-4 light">Women Shoes</h2>
                    <a href="index.html"
                      class="text-uppercase light mt-3 d-inline-block text-hover fw-bold light-border">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
  <section class="discount-coupon py-2 my-2 py-md-5 my-md-5">
    <div class="container">
      <div class="bg-gray coupon position-relative p-5">
        <div class="bold-text position-absolute">10% OFF</div>
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-7 col-md-12 mb-3">
            <div class="coupon-header">
              <h2 class="display-7">10% OFF Discount Coupons</h2>
              <p class="m-0">Subscribe us to get 10% OFF on all the purchases</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-12">
            <div class="btn-wrap">
              <a href="#" class="btn btn-black btn-medium text-uppercase hvr-sweep-to-right">Email me</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="featured-products" class="product-store">
    <div class="container-md">
      <div class="display-header d-flex align-items-center justify-content-between">
        <h2 class="section-title text-uppercase">Featured Products</h2>
        <div class="btn-right">
          <a href="index.html" class="d-inline-block text-uppercase text-hover fw-bold">View all</a>
        </div>
      </div>
      <div class="product-content padding-small">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
          <div class="col mb-4">
            <div class="product-card position-relative">
              <div class="card-img">
                
                <!-- <img src="images/card-item1.jpg" alt="product-item" class="product-image img-fluid"> -->
                <img src="{{ asset('storage/user_images/8.jpg') }}" alt="User Image" class="product-image img-fluid" >

                <div class="cart-concern position-absolute d-flex justify-content-center">
                  <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                      <svg class="shopping-carriage">
                        <use xlink:href="#shopping-carriage"></use>
                      </svg>
                    </button>
                    <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                      <svg class="quick2-view">
                        <use xlink:href="#quick2-view"></use>
                      </svg>
                    </button>
                  </div>
                </div>
                <!-- cart-concern -->
              </div>
              <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                <h3 class="card-title fs-6 fw-normal m-0">
                  <a href="index.html">Running shoes for men</a>
                </h3>
                <span class="card-price fw-bold">$99</span>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="product-card position-relative">
              <div class="card-img">
                <!-- <img src="images/card-item2.jpg" alt="product-item" class="product-image img-fluid"> -->
                <img src="{{ asset('storage/user_images/9.jpg') }}" alt="User Image"  class="product-image img-fluid">

                <div class="cart-concern position-absolute d-flex justify-content-center">
                  <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                      <svg class="shopping-carriage">
                        <use xlink:href="#shopping-carriage"></use>
                      </svg>
                    </button>
                    <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                      <svg class="quick1-view">
                        <use xlink:href="#quick1-view"></use>
                      </svg>
                    </button>
                  </div>
                </div>
                <!-- cart-concern -->
              </div>
              <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                <h3 class="card-title fs-6 fw-normal m-0">
                  <a href="index.html">Running shoes for men</a>
                </h3>
                <span class="card-price fw-bold">$99</span>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="product-card position-relative">
              <div class="card-img">
                <!-- <img src="images/card-item3.jpg" alt="product-item" class="product-image img-fluid"> -->
                <img src="{{ asset('storage/user_images/10.jpg') }}" alt="User Image"  class="product-image img-fluid">

                <div class="cart-concern position-absolute d-flex justify-content-center">
                  <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                      <svg class="shopping-carriage">
                        <use xlink:href="#shopping-carriage"></use>
                      </svg>
                    </button>
                    <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                      <svg class="quick3-view">
                        <use xlink:href="#quick3-view"></use>
                      </svg>
                    </button>
                  </div>
                </div>
                <!-- cart-concern -->
              </div>
              <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                <h3 class="card-title fs-6 fw-normal m-0">
                  <a href="index.html">Running shoes for men</a>
                </h3>
                <span class="card-price fw-bold">$99</span>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="product-card position-relative">
              <div class="card-img">
                <!-- <img src="images/card-item4.jpg" alt="product-item" class="product-image img-fluid"> -->
                <img src="{{ asset('storage/user_images/11.jpg') }}" alt="User Image" class="product-image img-fluid">

                <div class="cart-concern position-absolute d-flex justify-content-center">
                  <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                      <svg class="shopping-carriage">
                        <use xlink:href="#shopping-carriage"></use>
                      </svg>
                    </button>
                    <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                      <svg class="quick-view">
                        <use xlink:href="#quick-view"></use>
                      </svg>
                    </button>
                  </div>
                </div>
                <!-- cart-concern -->
              </div>
              <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                <h3 class="card-title fs-6 fw-normal m-0">
                  <a href="index.html">Running shoes for men</a>
                </h3>
                <span class="card-price fw-bold">$99</span>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="product-card position-relative">
              <div class="card-img">
                <!-- <img src="images/card-item5.jpg" alt="product-item" class="product-image img-fluid"> -->
              <img src="{{ asset('storage/user_images/12.jpg') }}" alt="User" class="product-image img-fluid">

                <div class="cart-concern position-absolute d-flex justify-content-center">
                  <div class="cart-button d-flex gap-2 justify-content-center align-items-center">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modallong">
                      <svg class="shopping-carriage">
                        <use xlink:href="#shopping-carriage"></use>
                      </svg>
                    </button>
                    <button type="button" class="btn btn-light" data-bs-target="#modaltoggle" data-bs-toggle="modal">
                      <svg class="quick-view">
                        <use xlink:href="#quick-view"></use>
                      </svg>
                    </button>
                  </div>
                </div>
                <!-- cart-concern -->
              </div>
              <div class="card-detail d-flex justify-content-between align-items-center mt-3">
                <h3 class="card-title fs-6 fw-normal m-0">
                  <a href="index.html">Running shoes for men</a>
                </h3>
                <span class="card-price fw-bold">$99</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="collection-products" class="py-2 my-2 py-md-5 my-md-5">
    <div class="container-md">
      <div class="row">
        <div class="col-lg-6 col-md-6 mb-4">
          <div class="collection-card card border-0 d-flex flex-row align-items-end jarallax-keep-img">
            <!-- <img src="images/collection-item1.jpg" alt="product-item" class="border-rounded-10 img-fluid jarallax-img">
              -->
         <img src="{{ asset('storage/user_images/2.jpg') }}" alt="User Image" class="border-rounded-10 img-fluid jarallax-img">

            <div class="card-detail p-3 m-3 p-lg-5 m-lg-5">
              <h3 class="card-title display-3">
                <a href="#">Minimal Collection</a>
              </h3>
              <a href="index.html" class="text-uppercase mt-3 d-inline-block text-hover fw-bold">Shop Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="collection-card card border-0 d-flex flex-row jarallax-keep-img">
            <!-- <img src="{{ asset('images/collection-item2.jpg') }}" alt="Collection Item" width="100"> -->
                  <img src="{{ asset('storage/user_images/3.jpg') }}" alt="User Image"  class="border-rounded-10 img-fluid jarallax-img">

            <div class="card-detail p-3 m-3 p-lg-5 m-lg-5">
              <h3 class="card-title display-3">
                <a href="#">Sneakers Collection</a>
              </h3>
              <a href="index.html" class="text-uppercase mt-3 d-inline-block text-hover fw-bold">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="latest-products" class="product-store py-2 my-2 py-md-5 my-md-5 pt-0">
    <div class="container-md">
      <div class="display-header d-flex align-items-center justify-content-between">
        <h2 class="section-title text-uppercase">Latest Post</h2>
        <div class="btn-right">
          <a href="index.html" class="d-inline-block text-uppercase text-hover fw-bold">View all</a>
        </div>
      </div>
      <div class="product-content padding-small">
         <!-- start -->
  @foreach ($postImages as $post)
  <div class="col mb-4">
    <div class="card product-card h-100 position-relative border-0 shadow-sm">

      {{-- Post Image --}}
      <div class="card-img position-relative">
        @php
          $postImage = isset($post['images'][0]) ? $post['images'][0] : null;
        @endphp

        @if ($postImage)
          <img src="{{ asset('storage/post_images/' . $postImage['img_name'] . '.' . $postImage['extension']) }}"
               alt="Post Image"
               class="img-fluid">
        @else
          <img src="{{ asset('images/placeholder.png') }}" alt="No Image" class="img-fluid">
        @endif
      </div>

      {{-- Card Body --}}
      <div class="card-body d-flex flex-column">
        <h5 class="card-title fs-6 fw-normal mb-2">
          <a href="{{ route('posts.show', $post['post_id']) }}" class="text-decoration-none text-dark">
            {{ $post['title'] }}
          </a>
        </h5>

        {{-- Author --}}
        <p class="text-muted small mb-0">
          By: {{ $post['user']['name'] ?? 'Unknown' }}
        </p>
      </div>

      {{-- Footer --}}
      <div class="card-footer bg-light d-flex justify-content-between align-items-center border-top">
        <span class="fw-bold text-primary mb-0">
      
        </span>

        <div class="d-flex gap-2" class="text-center" text-align: center;>
          <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modallong">
            <svg class="shopping-carriage" width="12" height="16">
              <use xlink:href="#shopping-carriage"></use>
            </svg>
          </button>
          
          <div class="text-center" text-align: center; >
            <button text-align: center; type="button" class="btn btn-light quick-view-btn"
              data-bs-toggle="modal" data-bs-target="#quickViewModal"
              data-title="{{ $post['title'] }}"
              data-summary="{{ Str::limit($post['summary'] ?? '', 60) }}"
              data-description="{{ strip_tags($post['description']) }}"
              data-status="{{ $post['active'] ? 'Active' : 'Inactive' }}"
              data-author="{{ $post['user']['name'] ?? 'Unknown' }}"
              data-images='@json(array_map(function($image) {
                return asset("storage/post_images/" . $image["img_name"] . "." . $image["extension"]);
              }, $post["images"]))'>
              
              <svg class="quick-view" width="16" height="16">
                <use xlink:href="#quick-view"></use>
              </svg>
            </button>
          </div>


        </div>
      </div>

    </div>
  </div>
@endforeach

 <!-- Quick View Modal -->
<div class="modal fade" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="quickViewLabel">Post Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <!-- Summary / Initial info -->
        <h3 id="modal-title"></h3>
        <p id="modal-summary" class="text-muted small"></p>

      
        <div id="quickViewFull" class="d-none">
          <hr>
          <p id="modal-description"></p>
          <p><strong>Status:</strong> <span id="modal-status"></span></p>
          <p><strong>Author:</strong> <span id="modal-author"></span></p>
        </div>

        
        <div id="modal-images" class="d-flex flex-wrap gap-2 mt-3"></div>
      </div>

      <div class="modal-footer">
        <button id="toggleDetailsBtn" class="btn btn-secondary btn-sm">Show More</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>

    @if(auth()->check())
  
<form action="{{ route('posts.like', $post['post_id']) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-outline-primary btn-sm">
@if (App\Models\Post::find($post['post_id'])?->isLikedByUser(auth()->id()))
                ❤️ Liked
            @else
                🤍 Like
            @endif
        </button>
    </form>
    @else
        <button type="button"
                class="btn btn-outline-primary btn-sm"
                data-bs-toggle="modal" 
                data-bs-target="#modallogin">
            🤍 Like
        </button>
       
    @endif
  

    </div>
  </div>
</div>


          <!-- end -->  
          
              </div>           
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer id="footer" class="py-5 border-top">
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-2 pb-3">
          <div class="footer-menu">
            <h5 class="widget-title pb-2">Info</h5>
            <ul class="menu-list list-unstyled">
              <li class="pb-2">
                <a href="#">Track Your Order</a>
              </li>
              <li class="pb-2">
                <a href="index.html">Our Blog</a>
              </li>
              <li class="pb-2">
                <a href="#">Privacy policy</a>
              </li>
              <li class="pb-2">
                <a href="#">Shipping</a>
              </li>
              <li class="pb-2">
                <a href="#">Contact Us</a>
              </li>
              <li class="pb-2">
                <a href="#">Help</a>
              </li>
              <li class="pb-2">
                <a href="#">Community</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 pb-3">
          <div class="footer-menu">
            <h5 class="widget-title pb-2">About</h5>
            <ul class="menu-list list-unstyled">
              <li class="pb-2">
                <a href="#">History</a>
              </li>
              <li class="pb-2">
                <a href="#">Our Team</a>
              </li>
              <li class="pb-2">
                <a href="#">Services</a>
              </li>
              <li class="pb-2">
                <a href="#">Company</a>
              </li>
              <li class="pb-2">
                <a href="#">Manufacture</a>
              </li>
              <li class="pb-2">
                <a href="#">Wholesale</a>
              </li>
              <li class="pb-2">
                <a href="#">Retail</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 pb-3">
          <div class="footer-menu">
            <h5 class="widget-title pb-2">Women Shoes</h5>
            <ul class="menu-list list-unstyled">
              <li class="pb-2">
                <a href="#">Track Your Order</a>
              </li>
              <li class="pb-2">
                <a href="index.html">Our Blog</a>
              </li>
              <li class="pb-2">
                <a href="#">Privacy policy</a>
              </li>
              <li class="pb-2">
                <a href="#">Shipping</a>
              </li>
              <li class="pb-2">
                <a href="#">Contact Us</a>
              </li>
              <li class="pb-2">
                <a href="#">Help</a>
              </li>
              <li class="pb-2">
                <a href="#">Community</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 pb-3">
          <div class="footer-menu">
            <h5 class="widget-title pb-2">Popular</h5>
            <ul class="menu-list list-unstyled">
              <li class="pb-2">
                <a href="#">Prices Drop</a>
              </li>
              <li class="pb-2">
                <a href="#">New Products</a>
              </li>
              <li class="pb-2">
                <a href="#">Best Sales</a>
              </li>
              <li class="pb-2">
                <a href="index.html">Stores</a>
              </li>
              <li class="pb-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#modallogin">Login</a>
              </li>
              <li class="pb-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#modallong">Cart</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 pb-3">
          <div class="footer-menu">
            <h5 class="widget-title pb-2">Mens Collection</h5>
            <ul class="menu-list list-unstyled">
              <li class="pb-2">
                <a href="#">Delivery</a>
              </li>
              <li class="pb-2">
                <a href="index.html">About Us</a>
              </li>
              <li class="pb-2">
                <a href="#">Shoes</a>
              </li>
              <li class="pb-2">
                <a href="#">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 pb-3">
          <div class="footer-menu">
            <h5 class="widget-title pb-3">Get In Touch</h5>
            <div class="footer-contact-text">
              <span>Stylish Online Store 123 Main Street, Toulouse - France. </span>
              <span> Call us: (+33) 800 456 789-987 </span>
              <span class="text-hover fw-bold light-border"><a href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a></span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p>© Copyright Stylish 2023.</p>
        </div>
        <div class="col-md-6 text-lg-end">
          <p>Free HTML by <a href="https://templatesjungle.com/" target="_blank">TemplatesJungle</a><br> Distributed by <a href="https://themewagon.com" target="blank">ThemeWagon</a> </p>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
     
        <script src="js/datatables-simple-demo.js"></script>

</body>

</html>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('quickViewModal');
    const toggleBtn = document.getElementById('toggleDetailsBtn');

    let detailsVisible = false;

    document.querySelectorAll('.quick-view-btn').forEach(button => {
      button.addEventListener('click', () => {
        // Fill modal with data
        document.getElementById('modalTitle').textContent = button.dataset.title;
        document.getElementById('modalSummary').textContent = button.dataset.summary;
        document.getElementById('modalDescription').textContent = button.dataset.description;
        document.getElementById('modalStatus').textContent = button.dataset.status;
        document.getElementById('modalAuthor').textContent = button.dataset.author;
        document.getElementById('modalImg').src = button.dataset.img;

        // Hide full details by default
        document.getElementById('quickViewFull').classList.add('d-none');
        toggleBtn.textContent = 'Show More';
        detailsVisible = false;
      });
    });

    toggleBtn.addEventListener('click', () => {
      detailsVisible = !detailsVisible;
      document.getElementById('quickViewFull').classList.toggle('d-none');
      toggleBtn.textContent = detailsVisible ? 'Show Less' : 'Show More';
    });
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
  var quickViewModal = document.getElementById('quickViewModal');
  
  quickViewModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;

    // Read data attributes from clicked button
    var title = button.getAttribute('data-title');
    var author = button.getAttribute('data-author');
    var status = button.getAttribute('data-status');
    var summary = button.getAttribute('data-summary');
    var description = button.getAttribute('data-description');
    var imagesJson = button.getAttribute('data-images');
    var images = JSON.parse(imagesJson);

    // Set modal content
    quickViewModal.querySelector('#modal-title').textContent = title;
    quickViewModal.querySelector('#modal-author').textContent = author;
    quickViewModal.querySelector('#modal-status').textContent = status;
    quickViewModal.querySelector('#modal-summary').textContent = summary;
    quickViewModal.querySelector('#modal-description').textContent = description;
  
    var imagesContainer = quickViewModal.querySelector('#modal-images');
    imagesContainer.innerHTML = ''; // Clear previous images

    images.forEach(function (src) {
      var img = document.createElement('img');
      img.src = src;
      img.classList.add('img-thumbnail');
      img.style.width = '120px';
      img.style.marginRight = '5px';
      imagesContainer.appendChild(img);
    });
  });
});

</script>
<script>
    document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
    $('.modal').modal('hide');
    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();
</script>
<script>
function forceCloseModalCleanup() {
   
    $('.modal').modal('hide');

    
    $('body').removeClass('modal-open');

  
    $('.modal-backdrop').remove();
}
</script>
@if(session('showLoginModal'))
    <script>
        window.onload = function() {
            var myModal = new bootstrap.Modal(document.getElementById('modallogin'));
            myModal.show();
        };
    </script>
@endif
