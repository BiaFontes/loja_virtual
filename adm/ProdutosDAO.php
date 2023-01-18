<?php

class ProdutosDAO {

    private $conexao;


    /**
     * Cria uma novo objeto para fazer o CRUD de Categorias
     */
    public function __construct()
    {
        include_once 'MySQL.php';

        $this->conexao = new MySQL();
    }


    /**
     * Retorna um registro específico da tabela Categoria
     */
    public function getById_prod($id_prod) {

        $stmt = $this->conexao->prepare("SELECT * FROM produtos WHERE id_prod = ?");
        $stmt->bindValue(1, $id_prod);
        $stmt->execute();

        return $stmt->fetchObject();            
    }


    /**
     * Retorna todos os registros da tabela Categoria.
     */
    public function getAllRows() {
        
        $stmt = $this->conexao->prepare("SELECT * FROM produtos");
        $stmt->execute();

        $arr_produtos = array();

        while($c = $stmt->fetchObject())
            $arr_produtos[] = $c;

        return $arr_produtos;
    }



    /**
     * Método que insere uma categoria na tabela Categoria.
     */
    public function insert($dados_produtos) {
 
        $sql = "INSERT INTO produtos (nome, valor) VALUES (?, ?)";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $dados_produtos['nome']);
        $stmt->bindValue(2, $dados_produtos['valor']);
        $stmt->execute();
    }


    /**
     * Atualiza um registro na tabela Categoria.
     */
    public function update($dados_produtos) {

        $sql = "UPDATE produtos 
                SET nome = ?, valor = ?
                WHERE id_prod = ? ";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $dados_produtos['nome']);
        $stmt->bindValue(2, $dados_produtos['valor']);
        $stmt->bindValue(3, $dados_produtos['id_prod']);
        $stmt->execute();
    }


    /**
     * Remove um registro da tabela Categoria.
     */
    public function delete($id_prod) {

        $sql = "DELETE FROM produtos WHERE id_prod = ? ";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id_prod);
        $stmt->execute();
    }
}

