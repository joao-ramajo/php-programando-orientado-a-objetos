<?php

require_once "./classes/tdg/ProdutoGateway.php";

$data1 = new stdClass;
$data1->descricao     = 'Vinho brasileiro Tinto Merlot';
$data1->estoque       = 10;
$data1->preco_custo   = 12;
$data1->preco_venda   = 18;
$data1->codigo_barras = '1231243123';
$data1->data_cadastro = date('Y-m-d');
$data1->origem        = 'N';

$data2 = new stdClass;
$data2->descricao     = 'Vinho Importado Tinto Carmenere';
$data2->estoque       = 10;
$data2->preco_custo   = 12;
$data2->preco_venda   = 18;
$data2->codigo_barras = '19290123929';
$data2->data_cadastro = date('Y-m-d');
$data2->origem        = 'I';


try{
    $conn = new PDO('sqlite:bd_qslite.db');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ProdutoGateway::setConnection($conn);

    $gw = new ProdutoGateway;

    // $gw->save($data1);
    // $gw->save($data2);

    $produto = $gw->find(1);
    $produto->estoque += 2;
    $gw->save($produto);

    foreach($gw->all("estoque<=10") as $produto){
        print $produto->descricao . PHP_EOL;
    }



} catch(Exception $e){
    print 'Erro: ' . $e->getMessage();
}
