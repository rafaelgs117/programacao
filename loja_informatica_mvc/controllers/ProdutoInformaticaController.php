<?php
require_once __DIR__ . '/../models/ProdutoInformaticaModel.php';
require_once __DIR__ . '/../entities/ProdutoInformatica.php';

class ProdutoInformaticaController {
    private $model;
    public function __construct($pdo){$this->model=new ProdutoInformaticaModel($pdo);}
    public function handleRequest(){
        $action=$_REQUEST['action']??'form';
        if($action==='create' && $_SERVER['REQUEST_METHOD']==='POST'){$this->create();}
        elseif($action==='delete' && isset($_POST['nome_delete'])){$this->delete();}
        elseif($action==='update' && $_SERVER['REQUEST_METHOD']==='POST'){$this->update();}
        else{$this->list();}
    }
    private function create(){
        $p=new ProdutoInformatica($_POST['nome']??'',$_POST['descricao']??'',floatval($_POST['preco']??0),intval($_POST['quantidade']??0));
        $this->model->inserir($p); header('Location:index.php'); exit;
    }
    private function delete(){
        $this->model->excluirPorNome(trim($_POST['nome_delete']??'')); header('Location:index.php'); exit;
    }
    private function update(){
        $this->model->atualizarPorNome($_POST['nome_busca']??'',$_POST['descricao_update']??'',floatval($_POST['preco_update']??0)); header('Location:index.php'); exit;
    }
    private function list(){
        $produtos=$this->model->listar(); $total=$this->model->contar();
        include __DIR__.'/../views/listagem.php';
    }
    // Adicionada função form para exibir o formulário de cadastro
    private function form(){
        include __DIR__.'/../views/formulario.php';
    }
    


}
?>
