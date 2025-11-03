<?php
require_once __DIR__ . '/../entities/ProdutoInformatica.php';
class ProdutoInformaticaModel {
    private $pdo;
    public function __construct(PDO $pdo){$this->pdo=$pdo;}
    public function inserir(ProdutoInformatica $p){
        $sql='INSERT INTO produtos (nome, descricao, preco, quantidade) VALUES (:n,:d,:p,:q)';
        $stmt=$this->pdo->prepare($sql);
        return $stmt->execute([':n'=>$p->getNome(),':d'=>$p->getDescricao(),':p'=>$p->getPreco(),':q'=>$p->getQuantidade()]);
    }
    public function listar(){
        $stmt=$this->pdo->query('SELECT * FROM produtos ORDER BY id DESC');
        return $stmt->fetchAll();
    }
    public function excluirPorNome($nome){
        $stmt=$this->pdo->prepare('DELETE FROM produtos WHERE nome=:n');
        return $stmt->execute([':n'=>$nome]);
    }
    public function atualizarPorNome($nome,$descricao,$preco){
        $stmt=$this->pdo->prepare('UPDATE produtos SET descricao=:d, preco=:p WHERE nome=:n');
        return $stmt->execute([':d'=>$descricao,':p'=>$preco,':n'=>$nome]);
    }
    public function contar(){
        $r=$this->pdo->query('SELECT COUNT(*) AS t FROM produtos')->fetch();
        return (int)$r['t'];
    }
}
?>
