<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Player;
use Validator;


class KheladiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $players = Player::all();
        $players = Player::paginate(2);
        // $players = Player::simplePaginate(2);


        return view('player.list',compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('player.add_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*// return $request->all();
        $name = $request->input('name');
        $game = $request->input('game');
        DB::insert('insert into players (name, game) values (?, ?)', [$name, $game]);*/

        //validation
        $rules = Validator::make($request->all(),[
             'name'=>'required|min:3',
             'game'=>'required',

         ])->validate();

        Player::create($request->all());
        // return redirect()->route('kheladi.index'); 
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Player::find($id);
        // return $id;
        return view('player.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data = Player::find($id);
       return view('player.edit',compact('data'));
        // return $id;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    

        $data = Player::find($id);

        // echo $request->title;
        // exit;

        $data->name= $request->name;
        $data->game = $request->game;

        $data->save();
        
        // return back();

        return redirect()->route('kheladi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data = Player::find($id);
    
     Player::destroy($data->id);
     return back();

    }
}
