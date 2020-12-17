<?php 

namespace App\Controllers;
use App\Models\CategoriaModel;

class Home extends BaseController{

	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		 $this->session = \Config\Services::session();
	}


	public function index(){

			
		$model = new CategoriaModel();
      		
		$dados['categorias'] =  $model->findAll();
		$dados['titulo'] = "Listando todas as categorias";
		$dados['msg'] = $this->session->getFlashdata('msg');
		
		echo view('header', $dados);
		echo view('listaDeProdutos', $dados);
		echo view('footer');
	}

	public function salvando(){

		$data['mensage'] = '';

		if($this->request->getMethod() === 'post'){
			$categoria =  new CategoriaModel();
			$categoria->set('nome_ctg', $this->request->getPost('nome_ctg'));
			if($categoria->insert()){
				$data['mensage'] = 'Inserido com sucesso';
			}else{
				$data['mensage'] = 'Erro ao Inserir';
			}
		}


		return view('inserir', $data);

	}

	public function editar($id){

	
		$data['mensage'] = 'Editar';
		$data['acao'] = 'editar';

		$categoria = new CategoriaModel();

		$nomeCategoria = $categoria->find($id);
		
		if($this->request->getMethod() === 'post'){

			$nomeCategoria->nome_ctg = $this->request->getPost('nome_ctg');

			$categoria->update($id, $nomeCategoria);
			
			return redirect()->to('/');

		}



		$data['categoria'] = $nomeCategoria;

		echo view('inserir', $data);
	}

	public function excluir($id = null){

			if(is_null($id)){

				$this->session->setFlashdata('msg', 'Categoria não encontrado');

				return redirect()->to('/');
			}

			$categoria = new CategoriaModel();

			if($categoria->delete($id)){

				
				$this->session->setFlashdata('msg','Deletado com sucesso');

											
				return redirect()->to('/');

			}else{


				$this->session->setFlashdata('msg', 'Erro ao deletar - contate o suporte');
				
				return redirect()->to('/');


			}

		

	}

	
}
