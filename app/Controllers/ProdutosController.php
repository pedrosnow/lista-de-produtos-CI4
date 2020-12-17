<?php

namespace App\Controllers;
use App\Models\CategoriaModel;
use App\Models\ProdutoModel;


class ProdutosController extends BaseController{

    public function index(){

    }

    public function salvando(){

        $dados['titulo'] = 'Adicionando Produtos';

        $Categoria = new CategoriaModel();
        $CategoriaAll = $Categoria->findAll();
        helper('form');

        $arrayCategorias = [];

        foreach($CategoriaAll as $Categoria){
            $arrayCategorias[$Categoria->id_ctg] = $Categoria->nome_ctg;

        }
        $css = [
            'id' => 'teste',
        ];

        $dados['BoxProdutos'] = form_dropdown('id_ctg', $arrayCategorias, 'large', $css);


        if($this->request->getMethod() === 'post'){

            $Produto = new ProdutoModel();

            $dadosProdutos = $this->request->getPost();

            if($Produto->insert($dadosProdutos)){

                $dados['msg'] = 'Inserido com sucesso';

            }else{

                $dados['msg'] = 'Ocorreu um erro na hora de Inserir por favor entre encontato com suporte';

            }

        
        }

       
        echo view('header', $dados);
        echo view('main-produto', $dados);

    }


}



