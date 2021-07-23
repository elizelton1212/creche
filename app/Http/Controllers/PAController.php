<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Candengue;
use App\Models\PagamentoAtividade;
use App\Models\Atividade;
class PAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
private $candengue;
private $pagamento;
private $atividade; 

     public function __construct()
     {
         # code...
        $this->candengue=new Candengue();
        $this->pagamento=new PagamentoAtividade();
        $this->atividade=new Atividade(); 
     }
    public function index()
    {
        //

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    $atividades =$this->atividade->all();
    $c=$this->candengue->find($id);
    $candengues=$this->candengue->find($id)->pagamentoAtividade;
    
    
    return view ('atividade.listaShow', compact('candengues','atividades','c'));    

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
