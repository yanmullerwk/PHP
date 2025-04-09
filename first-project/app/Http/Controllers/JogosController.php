<?php

namespace App\Http\Controllers;

use App\Models\jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index(){
        //dd('Olá Mundo');

        $jogos = jogo::all();
        //dd($jogos);
        return view('jogos.index',['jogos'=>$jogos]);
    }

    public function create(){
        return view('jogos.create');
    }

    public function store(Request $request){
        
    
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'ano_criacao' => 'required|digits:4',
            'valor' => 'required|numeric'
        ]);
    
        Jogo::create($validated);
    
        return redirect()->route('jogos-index');
    }

    public function edit($id){
        $jogos = jogo::where('id',$id)->first();
        if (empty($jogos)) {
            return redirect()->route('jogos-index');
        }
        
        return view('jogos.edit',['jogos'=>$jogos]);
        
    }
    
    public function update(Request $request, $id){
        $data =[
            'nome'=>$request->nome,
            'categoria'=>$request->categoria,
            'ano_criacao'=>$request->ano_criacao,
            'valor'=>$request->valor,
        ];
        jogo::where('id', $id)->update($data);
        return redirect()->route('jogos-index');
    }

    public function destroy($id){
        jogo::where('id', $id)->delete();
        return redirect()->route('jogos-index');
    }

}
