<?php

require '../app/modelos/Categoria.php';

    $cat1 = new Categoria(1, 'eletronicos', 'smartphone');
    var_dump($cat1);
    
//teste do método getCategorias
$crud = new CrudCategoria();
$categorias = $crud->getCategorias();
var_dump($categorias);

//teste do método getCategoria()
$categoria = $crud->getCategoria();
var_dump($categoria);


