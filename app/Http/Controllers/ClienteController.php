<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $clientes = Cliente::all();

        return view('clientes/index')->with('clientes', $clientes);
    }
    public function show($id){
        $cliente = Cliente::find($id);
        return view('clientes/show')->with('cliente', $cliente);
    }

    public function edit($id){
        $cliente = Cliente::find($id);

        return view('clientes/edit')->with('cliente', $cliente);
    }

    public function create(){
        $cliente = new Cliente();

        return view('clientes/create')->with('cliente', $cliente);

    }

    public function destroy(Request $request, $id){
        $cliente = Cliente::find($id);
       if($cliente->saldo == 0){
        if ($cliente -> delete()) {
                $request -> session() -> flash('message', 'Cliente Excluído');
            } else {
                $request -> session() -> flash('message', 'Houve falha ao excluir');
            }
       }else {
           $request -> session() -> flash('message', 'Cliente possui saldo, portanto não pode ser apagado!!!');
       }
        return redirect()->route('clientes.index');        
    }

    public function store(request $request){

        $cliente = new cliente();
        $cliente -> nome = $request->input('nome');
        $cliente -> cpf = $request->input('cpf');
        $cliente -> endereco = $request->input('endereco');
        $cliente -> saldo = 0.00;


        if($cliente->save()){
            $request->session()->flash('message', 'Cliente cadastrado com sucesso');
            //echo 'Cliente salvo com sucesso';
        }else{
            $request->session()->flash('message', 'Houve um erro ao cadastrar o cliente');
            //echo 'Houve um erro ao salvar';
        }
        return redirect()->route('clientes.index');
    }

    public function update(request $request, $id){

        $cliente = Cliente::find($id);
        $cliente -> nome = $request->input('nome');
        $cliente -> cpf = $request->input('cpf');
        $cliente -> telefone = $request->input('telefone');
        $cliente -> endereco = $request->input('endereco');
        $cliente -> saldo = $request->input('saldo');

        if($cliente->save()){
            $request->session()->flash('message', 'Cliente atualizado com sucesso');
        }else{
            $request->session()->flash('message', 'Houve um erro ao salvar');
        }
        return redirect('clientes');
    }

}