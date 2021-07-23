<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Candengue;
use App\Models\CandengueTurma;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     private $turma;
     private $candengue;
     private $tc;

     public function __construct()
     {
         # code...
        $this->candengue = new Candengue();
         $this->turma= new Turma();
         $this->tc=new CandengueTurma();
     }
    public function index()
    {
        //
$turmas = $this->turma->paginate(10);


return view('turma.index',compact('turmas'));



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

        $insert = $this->turma->create([
            'descricao'=>$request->descricao

        ]);

        if($insert){
            echo 'Dados Cadastrados Com sucesso';

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
        $turmas = $this->turma->find($id);
        

        return view('turma.show',compact('turmas'));
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
        $turma = $this->turma->find($id);
        return view('turma.edi',compact('turma'));

        
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
        $update = $this->turma->where('id',$request->id)->update([
            'descricao'=>$request->descricao

        ]);

        if($update){

            echo 'Dados Atualizados Com sucesso';
        }else{
            echo 'Dados Alterados Com sucesso';

        }

;
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

        $delete = $this->turma->destroy($id);

        if($delete){

            echo 'Dados Eliminados Com Sucesso';
        }else{
            echo 'Dados Alterados Com Sucesso';

        }
    }

    public function associarEstudante()
    {
        # code...
        $turmas=$this->turma->all();
        $candengues= $this->candengue->all();

        return view('turma.associar',compact('candengues','turmas'));
    }




    public function imprimirTurma()
    {
        # code...

$turmas = $this->turma->paginate(10);


return view('turma.imprimir',compact('turmas'));

    }

    public function listarIndex()
    {
        $turmas= $this->turma->all();
        $candengues = $this->candengue->all();
        $tcs = $this->tc->where('turma_id',1)->get();

        return view('turma.listarindex',compact('turmas','candengues'));
    }

public function listar(Request $request)
{

    $turmas= $this->turma->find($request->turma)->descricao;
    $candengues = $this->candengue->all();
    $tcs = $this->tc->where('turma_id',$request->turma)->get();

    return view('turma.listar',compact('turmas','candengues','tcs'));
}
}
