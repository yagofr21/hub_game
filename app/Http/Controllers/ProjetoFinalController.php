<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProjetoFinalController extends Controller
{
    public function homepage(){

        $buscar = request('buscar');
        if($buscar){
            
            $games = Game::where([
                ['name', 'like', '%'.$buscar.'%'],
            ])->get();

        } else {
            $games = Game::all();
        }
        return view('welcome',['games' => $games, 'buscar' => $buscar]);
    }
    
    public function cadastro(){
        return view('game.newgame');
    }

    public function store(Request $request){
        $game = new Game;

        $game->name = $request->name;
        $game->Data_de_lancamento = $request->Data_de_lancamento;
        $game->category = $request->category;
        $game->descripition = $request->descripition;

        if($request->hasFile('image') && $request->file('image')->isValid()){
           $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/games'), $imageName);

            $game->image = $imageName;
        }

        $user = auth()->user();
        $game->user_id = $user->id;

        $game->save();

        return redirect('/')->with('msg', 'Game criado com sucesso!');
    }
    
    public function show($id){
       $game = Game::findOrFail($id);

       $gameOwner = User::where('id', $game->user_id)->first()->toArray();

       return view("game.show", ["game" => $game, 'gameOwner' => $gameOwner]);
    }

    public function dashboard(){
        $user = auth()->user();
        $games = $user->games;

        return view('game.dashboard', ['games' => $games]);
    }

    public function destroy($id){
        Game::FindOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Game excluido com sucesso!');
    }
    
    public function edit($id){
        $game = Game::findOrFail($id);

        return view('game.edit', ['game' => $game]);
    }

    public function update(Request $request){

        $date = $request->all();

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
             $extension = $requestImage->extension();
 
             $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
 
             $requestImage->move(public_path('img/games'), $imageName);
 
             $date['image'] = $imageName;
         }

        Game::FindOrFail($request->id)->update($date);
        return redirect('/dashboard')->with('msg', 'Game editado com sucesso.!');

    }
}
