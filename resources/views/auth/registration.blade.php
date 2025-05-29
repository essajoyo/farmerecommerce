<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background: #eef2f7;
            font-family: 'Segoe UI', sans-serif;
        }

        .registration-container {
            margin-top: 60px;
            margin-bottom: 60px;
        }

        .registration-box {
            background: #ffffff;
            padding: 45px 40px;
            border-radius: 20px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
            max-width: 800px;
        }

        h4 {
            font-weight: 700;
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }

        label {
            font-weight: 500;
        }

        .btn-primary {
            background-color: #0069d9;
            border: none;
            font-weight: 600;
            padding: 12px;
        }

        .btn-primary:hover {
            background-color: #0050b3;
        }

        .form-control {
            border-radius: 10px;
        }

        .alert {
            font-size: 0.95rem;
        }
    </style>
</head>
<body>

<div class="container registration-container d-flex justify-content-center">
    <div class="registration-box w-100">
        <h4>User Registration</h4>

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
                    <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{ old('name') }}">
                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password">
                    <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Mobile</label>
                    <input type="text" class="form-control" name="mobile" placeholder="Enter your phone" value="{{ old('mobile') }}">
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
                    <span class="text-danger">@error('profession'){{ $message }}@enderror</span>
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
        </form>

        <div class="text-center mt-4">
            <a href="{{ url('login') }}">Already registered? Login here</a>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AJAX for dependent dropdowns -->
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

</body>
</html>
