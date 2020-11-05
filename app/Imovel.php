<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = [
        "descricao", "logradouro", "bairro", "numero", "cep", "cidade", "preco", "qtdQuartos", "tipo", "finalidade"
    ];

    protected $table = "imoveis";
}
