<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //ISSO TUDO QDO NOSSA TABELA NÃO ESTEJA NO PADRAO DO LARAVEL
    //public $tableName = "products"; QDO A TABELA NÃO ESTÁ ORIGINALMENTE COM O NOME NO PLURAL, PARA TROCARMOS
    //public $primaryKey = "id"; QDO O ID NÃO ESTIVER EM 1, PARA COLOCARMOS
    //public $timestamps = "false"; SE NÃO TIVER TIMESTAMPS NA TABELA
    public function users(){
        return $this->belongsTo('App\User');
    }
}
