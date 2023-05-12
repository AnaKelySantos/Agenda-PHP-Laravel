<?php

namespace App\Http\Controllers;

use App\Models\jogo;
use Illuminate\Http\Request;

class jogosController extends Controller
{
    public function index()
    {
        
        //$events = event::all();
        //dd($events);
        //$nome = "ana";
       // dd('olá, mundo');
       $jogos = jogo::all();
      // dd($jogos);
        return view('jogos.index',['jogos'=>$jogos]);
        }

        public function create()
        {
            return view('jogos.create');
        }

        public function store(Request $request)
        {
           jogo::create($request->all());
           return redirect()->route('jogos-index');
        }

        public function edit($id)
        {
            $jogos = jogo::where('id', $id)->first();
            if(!empty($jogos))
            {
                return view('jogos.edit',['jogos'=>$jogos]);
            }
            else
            {
                return redirect()->route('jogos-index');
            }
        }

        public function update(Request $request, $id)
        {
            $data = [
                    'nome' => $request->nome,
                    'categoria' => $request->categoria,
                    'ano_criacao' => $request->ano_criacao,
                    'valor' => $request->valor,
            ];

            jogo::where('id',$id)->update($data);
            return redirect()->route('jogos-index');

        }

        public function destroy($id)
        {
            jogo::where('id',$id)->delete();
            return redirect()->route('jogos-index');
        }
}

