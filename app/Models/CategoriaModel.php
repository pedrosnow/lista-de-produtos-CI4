<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model{

    protected $table = 'categoria';
    protected $primaryKey = 'id_ctg';
    protected $returnType  = 'object';
    protected $allowedFields = ['nome_ctg']; 

   

}

