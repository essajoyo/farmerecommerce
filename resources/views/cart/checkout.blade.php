
<div class="container py-5">
    <div class="card p-4">
        <h4>Checkout Form</h4>
        <form action="{{ route('checkout.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Billing Address</label>
                <textarea name="billing_address" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label>Shipping Address (optional)</label>
                <textarea name="shipping_address" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label>City</label>
                <select name="city_id" class="form-control" required>
                    @foreach($cities as $city)
                        <option value="{{ $city->city_id }}">{{ $city->city }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Delivery Method (Enter ID manually)</label>
                <input type="number" name="method_id" class="form-control" required>
            </div>

          

            <div class="form-group">
                <label>Discount Code</label>
                <input type="text" name="discount_code" class="form-control">
            </div>

            <button class="btn btn-success">Place Order</button>
        </form>
    </div>
</div>

