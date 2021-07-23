<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candengue;
use App\Models\Propina;
use App\Models\Candengue_Propina;
use App\Models\PagamentoAtividade;
use App\Models\Atividade;
use App\Models\TransporteCandengue;
use App\Models\Transporte;
use App\Models\CandengueTurma;
use App\Models\Turma;


class CandengueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $turma;
     private $candengue;
     private $tc;
     private $pm;
     private $atividade;
     private $pa;
     private $transporte;
     private  $tcc;
     private $propina;

     public function __construct(){

        $this->propina = new Propina();
        $this->turma = new Turma();
        $this->pa = new PagamentoAtividade();
        $this->pm=new Candengue_Propina();
        $this->candengue = new Candengue();
        $this->atividade = new Atividade();
        $this->tc = new TransporteCandengue();
        $this->transporte = new Transporte();
        $this->tcc=new CandengueTurma();
     }
    public function index()
    {
        //
        $turmas = $this->turma->all();
        $candengues= $this->candengue->paginate(10);

        return view('candengue.index',compact('candengues','turmas'));


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
        $nameFile;
     if ($request->hasFile('imagem')) {
         # code...
         $nome = $request->nome.$request->telefonePai;
        $extensao =$request->imagem->extension();
        $nameFile = "{$nome}.{$extensao}";
        $request->imagem->storeAs('public/candengues',$nameFile);
    
     }
        
        $insert = $this->candengue->create([

            'nome'=>$request->nome,
            'idade'=>$request->idade,
            'dataNascimento'=>$request->dataNascimento,
            'genero'=>$request->genero,
            'restricao'=>$request->restricao,
            'nomePai'=>$request->nomePai,
            'nomeMae'=>$request->nomeMae,
            'telefonePai'=>$request->telefonePai,
            'telefoneMae'=>$request->telefoneMae,
            'pessoaAlternativa'=>$request->pa,
            'contactoPessoaAlternativa'=>$request->telefonePa,
            'imagem'=>$nameFile
        ]);

       $propina = $this->propina->all();

       foreach ($propina as $key ) {
           # code...
        $this->pm->create([
            'candengue_id'=>$insert->id,
            'propina_id'=>$key->id,
            'ano'=>date('Y'),
            'estado'=>'INACTIVO'

        ]);


       }

       if($insert){

        $this->tcc->create([
            'turma_id'=>$request->turma,
            'candengue_id'=>$insert->id,
            'ano'=>date('Y')
        ]);
       }   

$candengue = $this->candengue->find($insert->id);
    return view('candengue.faturaMatricula',compact('candengue'));
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
$atividades= $this->atividade->all();
$pa = $this->pa->all();
$transportes = $this->transporte->all();
$t = $this->tc->where('candengue_id',$id)->get();
$ta =$this->turma->all();;

$turmaCandengue =$this->tcc->where('candengue_id',$id)->get();



//$t = $this->transporte->find($tcs->transporte_id);
$candengue = $this->candengue->find($id);
return view('candengue.show',compact('candengue','atividades','pa','t','transportes','turmaCandengue','ta'));

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
        $candengue = $this->candengue->find($id);
        return view('candengue.edit',compact('candengue'));
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

        $id = $request->id;

        $update = $this->candengue->where('id',$id)->update([
        'nome'=>$request->nome,
        'idade'=>$request->idade,
        'genero'=>$request->genero,
        'restricao'=>$request->restricao,
        'nomePai'=>$request->nomePai,
        'nomeMae'=>$request->nomeMae,
        'telefonePai'=>$request->telefonePai,
        'telefoneMae'=>$request->telefoneMae,
        'pessoaAlternativa'=>$request->pessoaAlternativa,
        'contactoPessoaAlternativa'=>$request->contactoPessoaAlternativa,
        ]);


        if($update){
            echo 'Dados Alterados com sucesso';

        }else {
            echo 'Erro ao Alterar os Dados';
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

        $del=$this->candengue->destroy($id);

        return ($del)?"sim":"Nao";
    }

    public function consultar(Request $request)
    {
        # code...
    $candengues = $this->candengue->where('nome',$request->candengue)->get();
    return view('candengue.consultar',compact('candengues'));
    }


    public function confirmacao(Request $request)
    {
        $candengue = $this->candengue->find($request->candengue);

        $propina = $this->pm->all();

        foreach ($propina as $key ) {
            # code...
         $this->pm->create([
             'candengue_id'=>$request->candengue,
             'propina_id'=>$key->id,
             'ano'=>date('Y'),
             'estado'=>'INACTIVO'
         ]);
        }
        //dd($candengue);
        return view('propina.faturaConfirmacao',compact('candengue'));


    }
public function imprimirCandengue()
{
    # code...

//    $turmas = $this->turma->all();
    $candengues= $this->candengue->paginate(10);

    return view('candengue.imprimir',compact('candengues'));

}
}
