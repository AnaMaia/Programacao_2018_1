<?php


require '../app/modelos/Produto.php';

$pod1 = new Produto(1,'biscoito', 'produto comestivel', '/home/aluno/public_html/leana/biscoito.jpeg', '3', 22);

var_dump($pod1);