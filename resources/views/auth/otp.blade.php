
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="POST" action="{{ route('verify-otp') }}">
            @csrf
            <label for="otp">Enter OTP</label>
            <input type="text" name="otp" class="form-control" required>
            <button type="submit" class="btn btn-primary">Verify</button>
        </form>

</body>
</html>

