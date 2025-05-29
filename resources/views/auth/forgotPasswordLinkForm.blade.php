<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md col md-offset-4">
            <hr>
                <br>
                <br><br>
            <h4>reset Password</h4>
                <hr>
                <form action="{{route('password.forgot.link.submit')}}" method="post">
                   <input type="hidden" name="token" value="{{ $token }}">
                @if(Session::has('success'))
                    <div class="alert.alert alert-success ">{{Session::get('success')}}</div>
                    @endif                 
                    @if(Session::has('fail'))
                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                    @endif

                   @csrf

                    <div class="form-group">
                        <label for="email">Full Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email" name="email" value="">
                        <span class= "text-danger">@error('email'){{$message}}@enderror</span>

                    </div>
                    
                    <div class="form-group">
                        <label for="password">Full Password</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="password" value="">
                        <span class= "text-danger">@error('password'){{$message}}@enderror</span>

                    </div>

                    <div class="form-group">
                        <label for="password">Confirme Password</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="password_confirmation" value="" id="password_confirmation">
                        <span class= "text-danger">@error('password_confirmation'){{$message}}@enderror</span>

                    </div>

                    <br>

                    <button class="btn btn-block btn-primary" type="submit">reset</button>
                </form>
                <br>
                <a href="registration">iF you not register !! click here</a>
                <br>
                <br>
              
                <a href="{{route('password.forgot')}}">Forgot Password</a>
            </div>
        </div>
    </div>
<br>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous"></script>
</html>