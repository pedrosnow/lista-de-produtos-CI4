<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model{

    protected $table = 'produto';
    protected $primaryKey = 'id_produto';
    protected $returnType  = 'object';
    protected $allowedFields = ['id_ctg','nome_produto','valor']; 

   

}

