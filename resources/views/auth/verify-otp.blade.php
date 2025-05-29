<form action="{{ route('verify-otp') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="text" name="phone" class="form-control" placeholder="Enter phone number" value="{{ old('phone') }}">
        <span class="text-danger">@error('phone'){{$message}}@enderror</span>
    </div>

    <div class="form-group">
        <label for="otp">Enter OTP</label>
        <input type="text" name="otp" class="form-control" placeholder="Enter OTP">
        <span class="text-danger">@error('otp'){{$message}}@enderror</span>
    </div>

    <button type="submit" class="btn btn-primary">Verify OTP</button>
</form>
