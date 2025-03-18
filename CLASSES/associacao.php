<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Relacionamento entre classes</title>
    </head>
    <body>
        <?php
            require_once './Fabricante.php';
            require_once './Produto.php';
            
            $p1 = new Produto('Chocolate', 10, 7);
            $f1 = new Fabricante('Cacau show', 'Willy Donka', '12345678');
            
            $p1->setFabricante($f1);
            
            print 'A descrição é ' . $p1->getDescricao() . "<br>\n";
            print 'O fabricante é ' . $p1->getFabricante()->getNome();
        ?>
    </body>
</html>
