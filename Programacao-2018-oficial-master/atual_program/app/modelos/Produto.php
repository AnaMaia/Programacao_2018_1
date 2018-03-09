<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 02/03/18
 * Time: 08:55
 */

class Produto
{
    private $id;
    private $nome;
    private $descricao;
    private $foto;
    private $preco;
    private $idcategoria;

    public function __construct($id = null, $nome = null, $descricao = null, $foto = null, $preco = null, $idcategoria=null){
        $this->id = $id;
        $this->nome= $nome;
        $this->descricao= $descricao;
        $this->foto= $foto;
        $this->preco= $preco;
        $this->idcategoria= $idcategoria;

        }
    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    public function getDescricao()
    {
        return $this->descricao;
    }


    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }


    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
    }


    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function getIdcategoria()
    {
        return $this->idcategoria;
    }


    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;
    }

}