<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalvaRequest;
use App\Models\Endereco;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EnderecoController extends Controller
{
    public function index(){
        $endereco = Endereco::all();
        return view('list')->with([
            'enderecos' => $endereco
        ]);
    }

    public function telaBuscar(){
        return view('busca');
    }

    public function busca(Request $request){
        try{

            $cep = $request->cep;
            $response = Http::get("https://viacep.com.br/ws/$cep/json/")->json();
            
            return view('adicionar')->with([
                'cep' => $cep,
                'logradouro' => $response['logradouro'],
                'bairro' => $response['bairro'],
                'localidade' => $response['localidade'],
                'uf' => $response['uf'],
    
            ]);
        }catch( Exception $e ){
            return $e->getMessage();
        }
        
    }

    public function salva(SalvaRequest $request){
        try{
            $endereco = Endereco::where('cep', $request->cep)->first();
            if(!$endereco){
                $novoEndereco = new Endereco();
                $novoEndereco->cep = $request->cep;
                $novoEndereco->logradouro = $request->logradouro;
                $novoEndereco->bairro = $request->bairro;
                $novoEndereco->localidade = $request->localidade;
                $novoEndereco->uf = $request->uf;
                $novoEndereco->numero = $request->numero;
    
                $novoEndereco->save();

                return redirect('/')->withSucesso("Endereço de CEP: $request->cep salvo com sucesso");
            }

            return redirect('/')->withErro("O endereço com o CEP: $endereco->cep já está cadastrado");
        }catch( Exception $e ){
            return $e->getMessage();
        }
        
    }
}
