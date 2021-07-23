<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    //
        protected $fillable= [

        'nome',
        'genero',
        'estadoCivil',
        'nBi',
        'inss',
        'nacionalidade',
        'iban',
        'salarioLiquido',
        'salarioBruto',
        'salarioBase',
        'bonus',
        'telefone',
        'id_user',

        ];

        public function funcionarioUser(){

            return $this->hasOne(User::class,'id','user_id');
        }
        
    }
