<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Internal CSS for styling -->
    <style>
        body {
            background: #f0f2f5;
        }

        .login-container {
            margin-top: 100px;
        }

        .login-box {
            background: #fff;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
        }

        h4 {
            text-align: center;
            font-weight: 600;
            color: #333;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        a {
            text-decoration: none;
        }

        .social-icons img {
            margin: 5px;
            transition: transform 0.2s ease-in-out;
        }

        .social-icons img:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>

<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-md-6 login-box">
            <h4 class="mb-4">User Login</h4>

            @if(Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @if(Session::has('fail'))
                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
            @endif
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

              <form action="{{route('login-user')}}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="email">Email Address</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                </div>

                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password">
                    <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>

                <div class="d-grid mb-3">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>

                <!-- <div class="text-center social-icons">
                    <a href="{{ URL::to('googleLogin') }}">
                        <img src="{{ URL::asset('google.png') }}" height="40px" alt="Google Login">
                    </a>
                    <a href="{{ URL::to('facebookLogin') }}">
                        <img src="{{ URL::asset('fb.png') }}" height="36px" alt="Facebook Login">
                    </a>
                </div> -->
            </form>

            <div class="text-center mt-3">
                <a href="registration">Don't have an account? Register here</a><br>
                <a href="">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


