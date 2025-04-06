<?php 

require_once 'classes/api/Transaction.php';
require_once 'classes/api/Connection.php';
require_once 'classes/api/Logger.php';
require_once 'classes/api/LoggerTXT.php';
require_once 'classes/api/Record.php';
require_once 'classes/model/Produto.php';

try{
    Transaction::open('estoque');
    Transaction::setLogger(new LoggerTXT('./tmp/log_protect.txt'));
    Transaction::log('Buscando produto');
    
    
    $p2 = Produto::find(2);

    $p2->estoque = 'dois';
    $p2->store();


    Transaction::close();


}catch(Exception $e){
    Transaction::close();
    print $e->getMessage();
}


?>