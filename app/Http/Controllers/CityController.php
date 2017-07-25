<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class CityController extends Controller
{


  public function create()
  {

  	return view('city.add_city');

  }

  public function store(Request $request)
  
  {
    $rules = Validator::make($request->all(),[
			 'city'=>'required|min:3',
			 'zone'=>'required',

		 ])->validate();


    return $request->all();



  }

}



