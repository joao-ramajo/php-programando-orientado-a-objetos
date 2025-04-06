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
            require_once 'CLASSES/Orcamento.php';
            require_once 'CLASSES/Produto.php';
            require_once 'CLASSES/Servico.php';
            require_once 'CLASSES/OrcavelInterface.php';
            
            $o = new Orcamento;
            
            $o->adiciona(new Produto('Maquina de cafe', 10, 299), 1);
            $o->adiciona(new Produto('Barbeador', 10, 170), 1);
            $o->adiciona(new Produto('Barra', 10, 7), 3);
            
            $o->adiciona(new Servico('Corte de grama', 20), 1);
            $o->adiciona(new Servico('Corte de barba', 20), 1);
            $o->adiciona(new Servico('Limpeza de apto', 50), 1);
            
            print $o->calculaTotal();
           
        ?>
    </body>
</html>
