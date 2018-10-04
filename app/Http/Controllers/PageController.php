<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //shipping•	Terms & Conditions shipping
    public function about()
    {
        return view('tamplete.about');
    }
    public function contact()
    {
        return view('tamplete.contact');
    }
    public function policy()
    {
        return view('tamplete.private_policy');
    }
    public function term()
    {
        return view('tamplete.terms_conditions');
    }
    public function shipping()
    {
        return view('tamplete.shipping');
    }
    public function shop()
    {
        return view('tamplete.shop');
    }

      public function product_page()
    {
        return view('tamplete.product-page');
    }
    // wishlist
        public function wishlist()
    {
        return view('tamplete.wish');
    }
       // account
        public function account()
    {
        return view('tamplete.account');
    }
        // cart
        public function cart()
    {
        return view('tamplete.cart');
    }

          // checkout order-complete
   public function checkout()
    {
        return view('tamplete.checkout');
    }
    public function order_overview()
    {
        return view('tamplete.order-overview');
    }
      public function payment()
    {
        return view('tamplete.payment');
    }
     public function order_complete()
    {
        return view('tamplete.order-complete');
    }
}
