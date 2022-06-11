<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
    use HasFactory;

    protected $fillable = [

        'name', 'cpf', 'rg', 'dtnascimento', 'fone', 'logradouro', 
        'complemento', 'bairro','cidade', 'cep',  'uf', 
        'email','fone', 'celular'
    ];

    protected $cast = [

    ];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function provedores(){

        return $this->belongsTo(Provedores::class);
    }
}