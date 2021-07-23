<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propina;
use App\Models\Candengue;
use Illuminate\Support\Facades\DB;
use App\Models\Atividade;
use App\Models\Candengue_Propina;

class PropinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
private $atividade;
private $propina;
private $candengue;
private $pm;

public function __construct()
{
    # code...
    $this->atividade=new Atividade();
    $this->candengue=new Candengue();
    $this->propina= new Propina();
    $this->pm=new Candengue_Propina();
}

    public function index()
    {
        //
    
        $candengues= $this->candengue->all();
        $propinas=$this->propina->all();

        return view('propina.index',compact('candengues','propinas'));
    

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
    public function show(Request $request)
    {
        //
      /*  $id=$request->candengue;
        $data = $request->mes;
        $candengue=$this->candengue->where(['id'=>1])->get();
        $prop=$this->propina->all();
        $prop=$this->propina->doesentHave('mes','janeiro');*/
        $prop = Candengue_Propina::where('propina_id',$request->mes)->where('ano',$request->ano)->where('estado','inactivo')->get();
        $candengue = $this->candengue->all();
        $m = $this->propina->find($request->mes);
        $mes=$m->mes;
        // dd($prop);
        
        return view('propina.consulta',compact('prop','candengue','mes'));
        
        /*foreach ($prop as $k) {
            # code...
        
            $candengue = $this->candengue->find($k->candengue_id);

            echo $candengue->nome;
        }*/

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

    public function pagamentoP(Request $request)
    {
        # code...
        $candengue  = $this->candengue->find($request->candengue);
       // $funcionario = $this->funcionario->find(auth()->user()->id);
        $propina  = $this->propina->find($request->mes);
        $retorno['candengue'] = $candengue->nome;
        $retorno['mes']=$propina->mes;
        
        return response()->json($retorno);
        


    }

    public function pagamento(Request $request)
    {
        # code...
        
            
        $propinas = $this->pm->where('propina_id',$request->mes)->where('ano',$request->ano)
        ->where('candengue_id',$request->candengue)->update([
            'estado'=>'ACTIVO'
        ]);


        
    }

    public function show2()
    {
        # code...
        $propinas = $this->propina->all();
        return view('propina.index2',compact('propinas'));
    }

public function confirmacao(){

$candengues=$this->candengue->all();


return view('propina.confirmacao',compact('candengues'));
}

}
