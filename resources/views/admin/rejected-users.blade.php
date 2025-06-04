<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form</title>
  <!-- AdminLTE and Bootstrap CSS -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  @include('disign.nav')


  
</head>
<body>
  
  <div class="container-fluid" align ="center">
    <br><br>
    @if(Session::has('success'))
      <div class="alert alert-success"></div>

{{Session::get('success')}}

    @endif
    <br>
    

      

<div class="container mt-4">
    <h3>Rejected Users</h3>
  
    @if($rejectedUsers->isEmpty())
        <p>No rejected users found.</p>
    @else

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Country</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Profession</th>
                    <th>Expertise Level</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rejectedUsers as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->mobile }}</td>
                        <td>{{ $user->country }}</td>
                        <td>{{ $user->state }}</td>
                        <td>{{ $user->city }}</td>
                        <td>{{ $user->profession }}</td>
                        <td>{{ $user->expertise_level }}</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                        <td>
                            <form action="{{ route('admin.user.approve', $user->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm">Approve</button>
                            </form>
                        </td>   
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>


    

      <!-- File Upload -->
     

      <!-- Submit Button -->
      
    

  <!-- AdminLTE JS -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
  <script>
    // Show file name on file input change
    $('.custom-file-input').on('change', function () {
      let fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
  </script>
</body>
</html>
