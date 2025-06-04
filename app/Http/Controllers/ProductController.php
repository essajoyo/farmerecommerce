<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage; 
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Country;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\SubCategory;
use App\Models\Post;
use App\Models\PostType;
use App\Models\Image;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
 public function create()
{
   
    $data['countries'] = Country::all(); 
    $data['categories'] = Category::all();
    $data['postTypes'] = PostType::all();
    $data['subcategory'] = SubCategory::all();

    return view('product.add_product', $data); 
}



public function store(Request $request)
{
    
    $product = new Product;
    $product->product = $request->title;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->stock = $request->stock;
    $product->status = $request->active;
    $product->is_feature = $request->is_feature ? 1 : 0;
    $product->is_shipping = 0;


if ($request->hasFile('feature_image')) {
    $path = $request->file('feature_image')->store('product_images', 'public');
    $product->feature_image = $path;
}


$product->save();


if ($request->hasFile('feature_images')) {
    foreach ($request->file('feature_images') as $file) {
        $path = $file->store('product_images', 'public');

        ProductImage::create([
            'product_id' => $product->id,
            'img_name' => $path
        ]);
    }
}


    return redirect('admin/add_product')->with('msg', 'Product added successfully.');
}



public function showProduct()
{
    $products = Product::all(); 
    return view('product.all_product', compact('products'));
}

// ProductController.php
public function detail($id)
{
    $product = Product::with('images')->findOrFail($id);
    return view('product.detail', compact('product'));
}



}
