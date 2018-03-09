<?php

require '../app/modelos/CrudCategoria.php';


    $cat1 = new Categoria();
    $cat1->setId(1);
    $cat1->setNome('Esportes');
    $cat1->setDescricao('Aqui e esportes');

    var_dump($cat1);


    $cat2 = new Categoria(2, 'Móveis', 'Móveis para sua casinha');
    var_dump($cat2);

//teste do método getCategorias
$crud = new CrudCategoria();
$categorias = $crud->getCategorias();
var_dump($categorias);

//teste dos métodos
$categoria = $crud->getCategoria(2);
$categoria = $crud->insertCategoria($cat2);
$categoria = $crud->deleteCategoria(5);
var_dump($categoria);

    
    