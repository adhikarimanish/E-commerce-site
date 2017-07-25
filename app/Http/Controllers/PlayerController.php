<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //

    public function list()
    {
    	$players = array(

           array(
           	"name"=>"manish adhikari",
           	"game"=>"cricket"

           	),
           array(
           	"name"=>"manish adhikari",
           	"game"=>"cricket"

           	),
           array(
           	"name"=>"manish adhikari",
           	"game"=>"cricket"

           	)

    		);
    	return view( 'list', compact('players') );

    }
}
