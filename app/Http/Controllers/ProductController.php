<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Wishlist;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }

    public function detail($id)
    {
        $product = Product::find($id);
        return view('detail', ['product' => $product]);
    }

    public function search(Request $req)
    {
        $query = $req->input('query');
        $data = Product::where('name', 'like', '%' . $query . '%')->get();
        return view('search', ['products' => $data]);
    }

    public function addToCart(Request $req)
    {
        if ($req->session()->has('user'))
        {
            $userId = $req->session()->get('user')['id'];
            $productId = $req->product_id;

            // Check if the product is already in the cart
            $existingCartItem = Cart::where('user_id', $userId)
                                    ->where('product_id', $productId)
                                    ->first();

            if ($existingCartItem) {
                // Product is already in the cart
                return redirect('/')->with('message', 'Product is already in your cart');
            } else {
                // Add new item to the cart
                $cart = new Cart;
                $cart->user_id = $userId;
                $cart->product_id = $productId;
                $cart->save();
                return redirect('/')->with('message', 'Product added to cart successfully');
            }
        }
        else
        {
            return redirect('/login');
        }
    }

    public static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    public function myCart()
    {
        $userId = Session::get('user')['id'];
        $data = DB::table('cart')
                    ->join('product', 'cart.product_id', '=', 'product.id')
                    ->where('cart.user_id', $userId)
                    ->select('product.*')
                    ->get();
        return view('cartlist', ['products' => $data]);
    }

    
    public function addToWishlist(Request $req)
{
    if ($req->session()->has('user'))
    {
        $userId = $req->session()->get('user')['id'];
        $productId = $req->product_id;

        // Check if the product is already in the wishlist
        $existingWishlistItem = Wishlist::where('user_id', $userId)
                                ->where('product_id', $productId)
                                ->first();

        if ($existingWishlistItem) {
            // Product is already in the wishlist
            return redirect('/')->with('message', 'Product is already in your wishlist');
        }
        
        // Add new item to the wishlist
        $wishlist = new Wishlist;
        $wishlist->user_id = $userId;
        $wishlist->product_id = $productId;
        $wishlist->save();
        return redirect('/')->with('message', 'Product added to wishlist successfully');
    }
    else
    {
        return redirect('/login');
    }
}
public static function wishlistItem()
    {
        $userId = Session::get('user')['id'];
        return Wishlist::where('user_id', $userId)->count();
    }
    public function Mywishlist()
    {
        $userId = Session::get('user')['id'];
        $data = DB::table('wishlists')
                    ->join('product', 'wishlists.product_id', '=', 'product.id')
                    ->where('wishlists.user_id', $userId)
                    ->select('product.*')
                    ->get();
        return view('wishlist', ['products' => $data]);
    }
}
