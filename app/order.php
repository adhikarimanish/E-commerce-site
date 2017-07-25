<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

use Gloudemans\Shoppingcart\Facades\Cart;

class order extends Model
{
   protected $fillable=['total','delivered'];

   public function oredrItems()
   {

   	return $this->belongsToMany(Product::class)->withPivot('qty','total');

   }

   public function customer()
   {
   	return $this->belongsTo(user::class);
   }

public static function createOrder()
   {

   	$user=Auth::user();
$order=$user->orders()->create([
	'total'=>Cart::total(),
	'delievered'=>0

	]);

	$cartItems=Cart::content();
	foreach($cartItems as $cartItem)
	{
		$order->orderItems()->attach($cartItem->id,[
			'qty'=>$cartItem->qty,
			'total'=>$cartItem->qty*$cartItem->price

			]);
	}

   }
}
