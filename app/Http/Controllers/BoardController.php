<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class Boardcontroller extends Controller
{
    public function hiro(Request $request)
    {
    $itemssss = Board::all();
    return view ('board.index', ['items10' => $itemssss]);
}

   public function add(Request $request)
   {
       return view('board.add');
   }

   

       public function hiroro(Request $request)
    {
        $this->validate($request, Board::$rules);
        $board = new Board;
        $form = $request->all();
        unset($form['_token']);
        $board->fill($form)->save();
        return redirect('board');
   }
}