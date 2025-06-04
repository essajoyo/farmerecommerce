<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Shopping Cart</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/st.css') }}">
</head>

<body>
    <div class="container py-5">
        <div class="card p-4">
            <div class="row">
                <!-- Cart Items -->
                <div class="col-md-8">
                    <div class="d-flex justify-content-between mb-4">
                        <h4><b>Shopping Cart</b></h4>
                        <span class="text-muted">{{ count($cart) }} item(s)</span>
                    </div>

                    @php $total = 0; @endphp
                    @forelse($cart as $id => $item)
                        @php $total += $item['price'] * $item['quantity']; @endphp
                        <div class="row border-top py-3 align-items-center">
                            <!-- Image -->
                            <div class="col-3 col-md-2">
                                <img class="img-fluid rounded" src="{{ asset('storage/' . $item['image']) ?? 'https://via.placeholder.com/80' }}" alt="{{ $item['name'] }}">
                            </div>

                            <!-- Name and Category -->
                            <div class="col-9 col-md-4">
                                <div class="text-muted small">{{ $item['category'] ?? 'Product' }}</div>
                                <div class="font-weight-bold">{{ $item['name'] }}</div>
                            </div>

                            <!-- Quantity -->
                            <div class="col-md-3 mt-2 mt-md-5">
                                <form action="" method="POST" class="d-flex align-items-center">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">
                                    <input name="quantity" type="number" value="{{ $item['quantity'] }}" class="form-control form-control-sm w-70"  min="1">
                                    <button type="submit" class="btn btn-sm btn-outline-secondary ml-2" style="margin-top: -30px;">Update</button>

                                </form>
                            </div>

                            <!-- Price & Delete -->
                            <div class="col-md-3 mt-2 mt-md-0 text-md-right">
                                <div class="font-weight-bold">Rs {{ $item['price'] * $item['quantity'] }}</div>
                                <form action="" method="POST" class="d-inline-block mt-1">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-sm text-danger border-0" style="margin-top: -10px; title="Remove">&#10005;</button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-muted">Your cart is empty.</p>
                    @endforelse

                    <div class="mt-4">
                        <a href="{{ route('products.index') }}" class="text-decoration-none">&larr; Back to shop</a>
                    </div>
                </div>

                <!-- Summary Section -->
                <div class="col-md-4 mt-4 mt-md-0">
                    <h5><b>Summary</b></h5>
                    <hr>
                    <div class="d-flex justify-content-between mb-2">
                        <span>ITEMS {{ count($cart) }}</span>
                        <span>Rs {{ $total }}</span>
                    </div>

                    <form>
                        <p class="mb-1">SHIPPING</p>
                        <select class="form-control mb-3">
                            <option>Standard Delivery - Rs 200</option>
                        </select>

                        <p class="mb-1">DISCOUNT CODE</p>
                        <input class="form-control" placeholder="Enter your code">
                    </form>

                    <div class="d-flex justify-content-between mt-4 pt-2 border-top">
                        <strong>TOTAL</strong>
                        <strong>Rs {{ $total + 200 }}</strong>
                    </div>
                    <a href="{{ route('checkout.form') }}" class="btn btn-dark btn-block mt-3">CHECKOUT</a>


                </div>
            </div>
        </div>
    </div>
</body>
</html>
