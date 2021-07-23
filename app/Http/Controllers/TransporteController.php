<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transporte;
use App\Models\TransporteCandengue;
use App\Models\Candengue;

class TransporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $transporte;
    private $tg,$candengue;
    

    public function __construct()
    {
        $this->transporte = new Transporte();
        $this->tg = new TransporteCandengue();
        $this->candengue= new Candengue();
    }

    public function index()
    {
        //
        $transportes = $this->transporte->paginate(15);

        return view('transporte.index',compact('transportes'));

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
    $insert = $this->transporte->create([
        'pontoPartida'=>$request->pontoPartida,
        'pontoChegada'=>$request->pontoChegada,
        'preco'=>$request->preco

    ]);

    if($insert){
echo 'Dados Cadastrados com sucesso';

    }else{

        echo 'Erro ao Cadastrar os Dados';
    }

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
        $transporte=$this->transporte->find($id);

        return view('transporte.show',compact('transporte'));

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
        $transporte=$this->transporte->find($id);

        return view('transporte.edit',compact('transporte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $update = $this->transporte->where('id',$request->id)->update([
            'pontoPartida'=>$request->pontoPartida,
            'pontoChegada'=>$request->pontoChegada,
            'preco'=>$request->preco
    


        ]);

        if($update){
            echo 'Dados Alterados Com Sucesso';
        }else {
            echo 'Erro ao alterar os Dados';
        }
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
        $delete = $this->transporte->destroy($id);
    }


    public function pagarTransporte()
    {
        # code...

        $candengues = $this->candengue->all();
        $transportes = $this->transporte->all();       

return view('transporte.pagarTransporte',compact('candengues','transportes'));

    }

    public function pagarTransporte1(Request $request){

        
        $insert = $this->tg->create([
            'transporte_id'=>$request->transporte_id,
            'candengue_id'=>$request->candengue_id,
            'obcervacao'=>$request->observacao


        ]);

        if ($insert){
            echo 'Dados cadastrados com sucesso';

        }else{

            echo 'Erro ao cadastrar os dados';
        }



    }
    public function pesquisarTransporte(Request $request)
    {
        # code...


        $transporte=$this->transporte->find($request->transporte);
        $candengue=$this->candengue->find($request->candengue);

        $retorno['transporte']=$transporte->pontoPartida;
        $retorno['candengue']=$candengue->nome;
        return response()->json($retorno);
        

    }

    public function imprimirTransporte()
    {
        # code...
        
        $transportes = $this->transporte->paginate(15);

        return view('transporte.imprimir',compact('transportes'));

    }
}
