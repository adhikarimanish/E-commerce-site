<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Support\Facades\Auth;

use App\Order;

class OrderController extends Controller
{
		public function orders($type='')
		{
			if($type=='pending'){
				$orders=order::where('delieverd','0')->get();
			}

			else if($type=='delieverd'){
				$orders=Order::where('delieverd','1')->get();
			}
			else
			{
				$orders=Order::all();
			}

		return view('admin.orders',compact('orders'));
	}

	public function toggledeliever(Request $request,$orderId)
	{
		$order=Order::find($orderId);

		if($request->has('delievered'))
		{
		$order->delievered=$request->delieverd;
	    }

	    else
	    {
	    	$order->delieverd="0";
	    }
		$order->save();
		return back();
	}

}

