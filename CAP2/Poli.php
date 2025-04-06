<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once "CLASSES/Conta.php";
        require_once "CLASSES/ContaPoupanca.php";
        require_once "CLASSES/ContaCorrente.php";
        
        $contas = array();
        
        $contas[] = new ContaCorrente(6677, "CC.1234.56", 100, 500);
        $contas[] = new ContaPoupanca(6678, "PP.1234.56", 100);
        
        foreach($contas as $key => $conta) {
            print "Conta {$conta->getInfo()} <br/>\n";
            print "    Saldo atual: {$conta->getSaldo()} <br/>\n";
            $conta->depositar(200);
            print "Conta {$conta->getSaldo()} <br/>\n";
            print "    Saldo atual: {$conta->getSaldo()} <br/>\n";
            
            if($conta->retirar(700)){
                print "     Retirada de: 700 <br/>\n";
            }
            else{
                print "     Retirada não permitida";
            }
            
            print "         Saldo Atual: {$conta->getSaldo()} <br/>\n";
            
            print "===================== <br/>\n";
        }
        ?>
    </body>
</html>
