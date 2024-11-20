<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\product;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = Cart::all();
        // dd($cartItems);
        return view('cart')->with('cartItems',$cartItems);
        //test
        $cartItems="";
    }


    public function addToCart(Request $request)
    {
        // dd($request->all());


            $cart=new cart();
            $cart->item= $request->name;
            $cart->price= $request->price;
            $cart->quantity= $request->quantity;
            $cart->save();

            

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
       //
    }

    public function removeCart(Request $request)
    {
       $cart=Cart::destroy($request->id);

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        //
    }
}

?>