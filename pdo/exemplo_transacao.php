<?php

require_once 'classes/ar/Produto.php';
require_once 'classes/api/Connection.php';
require_once 'classes/api/Transaction.php';

try {

    Transaction::open('estoque');

    $conn = Transaction::get();
    Produto::setConnection($conn);


    $p1 = new Produto;
    $p1->descricao     = 'Vinho brasileiro Tinto Merlot';
    $p1->estoque       = 10;
    $p1->preco_custo   = 12;
    $p1->preco_venda   = 18;
    $p1->codigo_barras = '1231243123';
    $p1->data_cadastro = date('Y-m-d');
    $p1->origem        = 'N';

    $p1->save();

    throw new Exception('Exceção forçada');

    $p2 = new Produto;
    $p2->descricao     = 'Vinho Importado Tinto Carmenere';
    $p2->estoque       = 10;
    $p2->preco_custo   = 12;
    $p2->preco_venda   = 18;
    $p2->codigo_barras = '19290123929';
    $p2->data_cadastro = date('Y-m-d');
    $p2->origem        = 'I';
    $p2->save();

    Transaction::close();
} catch (Exception $e) {
    Transaction::rollback();
    print $e->getMessage();
}
