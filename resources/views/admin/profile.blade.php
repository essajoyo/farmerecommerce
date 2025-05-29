<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Profile</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @include('disign.nav')

    <style>
        body {
            font-family: 'Lato', sans-serif;
            background: #f8f9fa;
        }
        .profile_img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            margin-top: -60px;
            border: 4px solid #fff;
            background-color: #ddd;
        }
       
       
        
        table {
            margin-top: 1rem;
        }
        table td, table th {
            vertical-align: middle;
        }
       
    .profile_img {
    width: 140px;
    height: 140px;
    object-fit: cover;
    border-radius: 50%;
    margin-top: -70px;
    border: 5px solid #fff;
    background-color: #ddd;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.profile_img:hover {
    transform: scale(1.1);
}

.card {
    border: none;
    border-radius: 1.5rem;
    min-height: 480px;
    padding: 1.8rem;
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: #fff;
}

.card-header {
    color: white;
    border-radius: 1.5rem 1.5rem 0 0;
    text-align: center;
    background: linear-gradient(135deg, #007bff, #0056b3);
    padding: 1.5rem 1rem;
    box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
}

.card-body {
    padding: 2rem 1.8rem;
}

.hover-card:hover {
    transform: scale(1.04);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
}

    </style>
</head>

<body>
    <br>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-end offset-lg-5"> <!-- align right -->
            <br>
      <div class="container py-5">
    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row g-4">

            <!-- Profile Card -->
          <div class="col-lg-12">
    <div class="card shadow rounded-4 text-center border-0">
        <div class="card-header bg-primary text-white rounded-top-4">
            <h5 class="mb-0">User Profile</h5>
        </div>
        <div class="card-body">
            <img src="{{ asset('storage/' . $user->image) }}" 
                 alt="Profile Image"
                 class="rounded-circle border border-3 mb-3"
                 style="width: 150px; height: 150px; object-fit: cover;">

            {{-- This file input will only work if it's inside the same update form --}}
            <div class="mb-3">
                {{-- Make sure this input is inside the user update form --}}
                <input type="file" name="image" class="form-control form-control-sm">
            </div>

            <h5 class="text-capitalize">{{ $user->name }}</h5>
            <p class="mb-1 text-muted"><strong>ID:</strong> {{ $user->id }}</p>
            <p class="mb-1"><strong>Expertise:</strong> {{ $user->expertise_level }}</p>
            <p class="mb-0"><strong>Section:</strong> A</p>
        </div>

        {{-- Buttons outside card-body but inside card --}}
        <div class="card-footer">
            <form action="{{ route('admin.user.reject', $user->id) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm me-2">Reject</button>
            </form>

            <form action="{{ route('admin.user.approve', $user->id) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-success btn-sm me-2">Approve</button>
            </form>
        </div>
    </div>
</div>


            <!-- Information Cards -->
            <div class="col-lg-12">
                <!-- General Info Card -->
                <div class="card shadow mb-4 border-0 rounded-4">
                    <div class="card-header bg-primary text-white rounded-top-4">
                        <h5><i class="far fa-user me-2"></i>General Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label>Name</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label>Phone</label>
                                <input type="text" name="mobile" value="{{ $user->mobile }}" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label>Profession</label>
                                <select name="profession" class="form-select" required>
                                    @foreach(['admin', 'user', 'farmer', 'academics', 'consultant'] as $role)
                                        <option value="{{ $role }}" {{ $user->profession == $role ? 'selected' : '' }}>
                                            {{ ucfirst($role) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            

                            <div class="col-md-6">
                                <label>Expertise Level</label>
                                <select name="expertise_level" class="form-select" required>
                                    @foreach(['beginner', 'intermediate', 'expert'] as $level)
                                        <option value="{{ $level }}" {{ $user->expertise_level == $level ? 'selected' : '' }}>
                                            {{ ucfirst($level) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Country</label>
                            <input type="text" name="country" value="{{ $user->location->country->country_name ?? '' }}" class="form-control" required>
                            </div>

                            <div class="col-md-4">
                                <label>State</label>
                            <input type="text" name="state" value="{{ $user->location->state->state_name ?? '' }}" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label>City</label>
                                <input type="text" name="city" value="{{ $user->location->city->city ?? '' }}" class="form-control" required>

                            </div>
                        </div>
                         
                       
                    </div>
                </div>

                <!-- Other Info Card -->
                <div class="card shadow mb-3 border-0 rounded-4">
                    <div class="card-header bg-primary text-white rounded-top-4">
                        <h5><i class="far fa-clone me-2"></i>Other Information</h5>
                    </div>
                    <div class="card-body">
                        <textarea name="other_info" class="form-control" rows="4" placeholder="Additional notes or information...">{{ $user->other_info ?? '' }}</textarea>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-end">
                    <button type="submit" class="btn btn-success btn-lg px-4">Update Profile</button>
                </div>
            </div>

        </div>
    </form>
</div>


        </div>

        </div>
    </form>
</div>

            
        </div>
    </div>
</section>


</body>
</html>
