<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::content();
        return view('cart', compact('cartItems'));
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        Cart::add($product->id, $product->name, 1, $product->regular_price, ['image' => $product->image]);

        return redirect()->route('cart.index')->with('success', 'Product added to cart successfully!');
    }

    public function updateCart(Request $request)
    {
        Cart::update($request->rowId, $request->quantity);
        return redirect()->route('cart.index')->with('success', 'Cart updated successfully!');
    }

    public function remove(Request $request)
    {
        // Validate the request
        $request->validate([
            'rowId' => 'required|string',
        ]);

        // Remove the item from the cart
        Cart::remove($request->input('rowId'));

        // Optionally, you can add some logic to check if the item was removed successfully

        // Return a response, e.g., redirect to the cart page with a success message
        return redirect()->route('cart.index')->with('success', 'Item removed successfully.');
    }

    public function clearCart()
    {
        Cart::destroy();
        return redirect()->route('cart.index')->with('success', 'Cart cleared successfully!');
    }

    public function applyCoupon(Request $request)
    {
        // Apply coupon logic here
        return redirect()->route('cart.index')->with('success', 'Coupon applied successfully!');
    }
}
