<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['cep', 'logradouro' , 'bairro', 'localidade', 'uf', 'numero'];
}
