<?php 

require_once 'classes/api/Transaction.php';
require_once 'classes/api/Connection.php';
require_once 'classes/api/Logger.php';
require_once 'classes/api/LoggerTXT.php';
require_once 'classes/api/Record.php';
require_once 'classes/model/Produto.php';

try{
    Transaction::open('estoque');
    Transaction::setLogger(new LoggerTXT('./tmp/log_update.txt'));
    Transaction::log('Atualizando produto');

    $p1 = Produto::find(2);
    
    print_r($p1);

    // print $p1->descricao;
    $p1->descricao = "Vinho tinto merlot";
    // print $p1->descricao;

    print_r($p1);
    $p1->store();
 
}catch(Exception $e){
    Transaction::close();
    print $e->getMessage();
}