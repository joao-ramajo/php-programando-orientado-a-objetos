<?php

require_once './classes/ar/Produto.php';
require_once './classes/api/Connection.php';

try{
    $conn = Connection::open('estoque');
    Produto::setConnection($conn);

    $pro = new Produto;
    $pro->descricao = "Café torrado";
    $pro->estoque = 100;
    $pro->preco_custo = 4;
    $pro->preco_venda = 7;
    $pro->codigo_barras = '123123213';
    $pro->data_cadastro = date('Y-m-d');
    $pro->origem = 'N';
    $pro->save();
}catch(Exception $e){
    print $e->getMessage();
}