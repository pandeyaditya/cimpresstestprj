<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

    /* To load products page */
	public function getproducts(Request $request){
        if($request->session()->has('email')){
            $products = Product::all();
		    return view('products')->with('products',$products);
        }
        else{
            return redirect('/user');
        }        
	}
	
	/* To list all products in json */
	public function allproducts(){
		$products = Product::all();
		dd($products);
    }
    
    public function flushcart(Request $request){
        // if($request->session->has('cart')){
            session()->forget('cart');    
        // }        
    }

    public function addtocart(Request $request){
        
        $id = $request->id;
        //Find product 
        $product = Product::find($id);
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "title" => $product->title,
                        "quantity" => 1,
                        "description" => $product->description,
                        "price" => $product->price,
                        "image" => $product->image
                    ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }
      
        // Add to cart array
        $cart[$id] = [
            "title" => $product->title,
            "category" => $product->category,
            "description" => $product->description,
            "image" => $product->image,
            "quantity"=>1,
            "price" => $product->price
        ];
        // dd($cart);
        $request->session()->put('cart',$cart);
       

    }

    
    // Cart display
    public function getcart(Request $request){
        if($request->session()->has('email')){
            return view('cart');
        }
        else{
            return redirect('/user');
        }
    }

    /* To load checkout page */
    public function checkout(Request $request){        
        if($request->session()->has('email')){
            return view('checkout');
        }
        else{
            return redirect('/user');
        }
    }


    /* To load confirm page */

    public function confirmorder(Request $request){

        // Load confirm page, based on status
        return view('confirmorder');
        
        //Send Thank you email
    }

}
