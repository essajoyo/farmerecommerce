<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\Order;
use App\Models\Status; 


class CartController extends Controller
{
 public function addToCart(Request $request, $id)
{
    $product = Product::findOrFail($id); // Correct
    $quantity = (int) $request->input('quantity', 1);

    if ($quantity > $product->stock) {
        return redirect()->back()->with('error', 'Only ' . $product->stock . ' item(s) available in stock.');
    }

  
    $product->stock -= $quantity;
    $product->save(); 

    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        $cart[$id]['quantity'] += $quantity;
    } else {
        $cart[$id] = [
            "name" => $product->product,
            "quantity" => $quantity,
            "price" => $product->price,
            "image" => $product->feature_image
        ];
    }

    session()->put('cart', $cart);

    return redirect()->back()->with('success', 'Product added to cart!');
}

public function viewCart()
{
    $cart = session()->get('cart', []);
    return view('cart.view', compact('cart'));
}

  public function showForm()
    {
        $cities = City::all();
       // optional dropdown
        return view('cart.checkout', compact('cities'));
    }

    public function storeOrder(Request $request)
    {
      
        $order = Order::create([
            'name' => $request->name,
            'email' => $request->email,
            'billing_address' => $request->billing_address,
            'shipping_address' => $request->shipping_address,
            'city_id' => $request->city_id,
            'method_id' => $request->method_id, 
            'discount_code' => $request->discount_code ?? '',
        ]);

        // You may want to clear cart session here

        return redirect('product.all_product')->with('success', 'Order placed successfully!');
    }


}
