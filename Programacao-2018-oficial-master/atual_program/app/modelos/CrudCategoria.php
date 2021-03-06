<?php

require_once 'DBConnection.php';
require_once 'Categoria.php';

class CrudCategoria
{

    private $conexao;

//getcategorias() - retorna uma lista de objetos de todas as categorias

    public function getCategorias()
    {
        //conexao
        $this->conexao = DBConNection::getConexao();

        //select
        $sql = 'select * from categoria';
        $resultado = $this->conexao->query($sql);
        //resultset do BD
        $categorias = $resultado->fetchAll(PDO::FETCH_ASSOC);

        $listaCategorias = [];
        foreach ($categorias as $categoria) {
            $listaCategorias = [] = new Categoria($categoria['id_categoria'], $categoria['nome_categoria'], $categoria['descricao_categoria']);

        }

        return $listaCategorias;

    }

    //getcategoria(') - retorna o objeto da categoria correspondente


    public function getCategoria($id)
    {
        //RECEBE UM ID INTEIRO E RETORNA O OBJETO CATEGORIA CORRESPONDENTE

        //faz a conexao
        $this->conexao = DBConNection::getConexao();

        //criando consulta
        $sql = "select * from categoria WHERE id_categoria=".$id;

        //executa a consulta, usando a conexao
        $result = $this->conexao->query($sql);

        //transforma um resultado em array
        $categoria = $result->fetch(PDO::FETCH_ASSOC);

        //instanciar um objeto do tipo categoria com os valores recebidos
        $objcat = new Categoria($categoria['id_categoria'], $categoria['nome_categoria'], $categoria['descricao_categoria']);

        //retorna o objeto categoria criado
        return $objcat;
    }



    public function insertCategoria($cat)
    {
        //RECEBE UM OBJETO $cat E INSERE NA TABELA CATEGOIA DO BD
        $this->conexao = DBConNection::getConexao();
        $sql = "insert into categoria (nome_categoria, descricao_categoiria) values ('$cat->getNome', '$cat->getDescricao')";
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }

    }

    public function updateCategoria($cat)
    {
        //recebe um objeto $cat e o altera na tabela categoria do BD
        $this->conexao = DBConNection::getConexao();
        $sql = "update categoria set nome_categoria='$cat->getNome()', descricao_categoria='$cat->getDescricao()' where id_categoria = $cat->getId";
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }


    }

    public function deleteCategoria($id)
    {
        //recebe um $id inteiro e apaga o registro correspondente no BD
        $this->conexao = DBConNection::getConexao();
        $sql = "delete from categoria where id_categoria=$id";
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }

    }
}

