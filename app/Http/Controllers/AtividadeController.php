<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atividade;
use App\Models\Candengue;
use App\Models\PagamentoAtividade;
class AtividadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $atividade;
    private $candengue;
    private $pa;
    public function __construct()
    {
        # code...
        $this->pa =new PagamentoAtividade();
        $this->atividade= new Atividade();
        $this->candengue=new Candengue();
    }
    public function index()
    {
        //


       $atividades= $this->atividade->paginate(10);

        return view('atividade.index',compact('atividades'));

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
        $insert = $this->atividade->create([
            'descricao'=>$request->descricao,
            'valor'=>$request->valor

        ]);


        if ($insert) {
            echo 'Dados Cadastrados Com Sucesso';

        }else {
            echo 'Erro Ao Cadastrar';
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

        $atividade = $this->atividade->find($id);
        return view('atividade.show',compact('atividade'));
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
        $atividade = $this->atividade->find($id);

        return view('atividade.edit',compact('atividade'));
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

        $id  = $request->id;

        $update = $this->atividade->where('id',$id)->update([
            'descricao'=>$request->descricao,
            'valor'=>$request->valor,
        ]);



        if($update){

            echo'Dados alterados com sucesso';
        }else{


            echo 'Erro ao alterar os dados';
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

        $del = $this->atividade->destroy($id);

        return ($del)?"Sim":"Nao";
    }

    public function pagamento(Request $request)
    {
        $atividades = $this->atividade->all();  
        $candengues= $this->candengue->all();
        return view('atividade.pagamento',compact('atividades','candengues')); 


    }


    public function pesquisarNomeCandengue(Request $request)
    {
        $nome =$this->candengue->find($request->nome);
        $atividade=$this->atividade->find($request->atividade);
        $resposta['nome'] = $nome->nome;
        $resposta['atividade'] = $atividade->descricao;
        return response()->json($resposta);
    }



    public function PagamentoA(Request $request)
    {
        $insert =$this->pa->create([
            'candengue_id'=>$request->idCandengue,
            'atividade_id'=>$request->idAtividade,
            'mes'=>$request->mes,

        ]);


    
             
    }


    public function lista()
    {
        # code...
$atividade = $this->atividade->all();

        return view('atividade.lista',compact('atividade'));
    }

    public function divida(Request $request)
    {
        # code...

        $devedores = $this->pa->where('mes',$request->mes)->where('atividade_id',$request->atividade)->get();
       //dd($devedores);
        $candengues = $this->candengue->all(); 
        $atividade = $this->atividade->all();
        return view('atividade.divida',compact('devedores','candengues','atividade'));
    }

    public function consultar(Request $request)
    {
        # code...
        $atividades = $this->atividade->where('descricao',$request->atividade)->get();
    return view('atividade.atividade',compact('atividades'));
    }


    public function imprimirAtividade()
    {
        # code...
        $atividades = $this->atividade->paginate(10);

        return view('atividade.imprimir',compact('atividades'));
    }
}
