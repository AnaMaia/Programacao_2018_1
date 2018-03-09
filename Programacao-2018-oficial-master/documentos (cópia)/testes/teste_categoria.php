<?php

require '../app/modelos/CrudCategoria.php';

    $cat1 = new Categoria(1, 'eletronicos', 'smartphone');
    var_dump($cat1);
    
//teste do método getCategorias
$crud = new CrudCategoria();
$categorias = $crud->getCategorias();
var_dump($categorias);

//teste dos métodos
$categoria = $crud->getCategoria(2);
$categoria = $crud->insertCategoria('ursinhos');
$categoria = $crud->deleteCategoria(5);
var_dump($categoria);



