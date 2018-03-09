<?php

require '../app/modelos/Categoria.php';


    $cat1 = new Categoria();
    $cat1->setId(1);
    $cat1->setNome('Esportes');
    $cat1->setDescricao('Aqui e esportes');

    var_dump($cat1);


    $cat2 = new Categoria(2, 'Móveis', 'Móveis para sua casinha');


    var_dump($cat2);
    
    