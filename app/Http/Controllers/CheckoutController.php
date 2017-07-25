<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Gloudemans\Shoppingcart\Facades\Cart;


class CheckoutController extends Controller
{
   
	// public function step1()
	// {
	// 	if(Auth::check()){

	// 		return redirect()->route('checkout.shipping');
	// 	}

	// 	return redirect('login');
	// }

	public function shipping()
	{
		return view('front.shipping-info');
	}

	public function payment()
	{
		return view('front.payment');
	}

	public function storePayment(Request $request)
	{
		$amt= cart::total();

		  // dd($amt);
		// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_d9IX2DOcKj7xIthFOI6AeBms");

// Token is created using Stripe.js or Checkout!
// Get the payment token submitted by the form:
$token = $request->stripeToken;

// Charge the user's card:
$charge = \Stripe\Charge::create(array(
  "amount" => Cart::total()*100,//amount in cents
  "currency" => "usd",
  "description" => "Example charge",
  "source" => $token,
));

// create the orders

	Order::createOrder();

	return "order completed";


	}

}
