<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Role;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $funcionario;
    private $user,$role;
    public function __construct(){
        $this->funcionario=new Funcionario();
        $this->user=new User();
        $this->role=new Role();

    }

    public function index()
    {
        
        $funcionarios=$this->funcionario->paginate(20);
        $roles = $this->role->all();
        return view('funcionario.index',compact('funcionarios','roles'));
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
        //dd($request->email);
        $createUser= $this->user->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password), 
        ]);
       $id=$createUser->id;

if($createUser){
    $user_role = DB::insert('insert into role_user (user_id,role_id)values(?,?)',[$id,$request->role]);

    $create= $this->funcionario->create([
        'nome'=>$request->nome,
        'genero'=>$request->genero,
        'estadoCivil'=>$request->estadoCivil,
        'nBi'=>$request->nbi,
        'inss'=>$request->inss,
        'nacionalidade'=>$request->nacionalidade,
        'iban'=>$request->iban,
        'salarioLiquido'=>$request->salarioLiquido,
        'salarioBruto'=>$request->salarioBruto,
        'salarioBase'=>$request->salarioBase,
        'bonus'=>$request->bonus,
        'telefone'=>$request->telefone,
        'id_user'=>$id
    ]);


if ($create){
echo 'Dados Cadastrados com sucesso';

}else{
    echo 'erro ao cadastrar';
}
    

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
        $funcionario= $this->funcionario->find($id);
        return view('funcionario.show',compact('funcionario'));
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

$funcionario = $this->funcionario->find($id);
return view('funcionario.edit',compact('funcionario'));

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
        $id= $request->id;
       $update= $this->funcionario->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'genero'=>$request->genero,
            'estadoCivil'=>$request->estadoCivil,
            'nBi'=>$request->nBi,
            'inss'=>$request->inss,
            'nacionalidade'=>$request->nacionalidade,
            'iban'=>$request->iban,
            'salarioLiquido'=>$request->salarioLiquido,
            'salarioBruto'=>$request->salarioBruto,
            'salarioBase'=>$request->salarioBase,
            'bonus'=>$request->bonus,
            'telefone'=>$request->telefone,            
            
        ]);

        if($update){
            echo 'Dados Alterados Com Sucesso';
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
        $del=$this->funcionario->destroy($id);
        return ($del)?"sim":"nao";
 
    }

    public function consultar(Request $request)
    {
        # code...
$funcionarios = $this->funcionario->where('nome',$request->estudante)->get();

return view('funcionario.consulta',compact('funcionarios'));


    }

    public function imprimirFuncionario()
    {
        # code...
       $funcionarios= $this->funcionario->paginate(10);


       return view('funcionario.imprimir',compact('funcionarios'));
    }
}
