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
            require_once './Produto.php';
            require_once './Caracteristica.php';
            
            $p1 = new Produto('Chocolate', 10,7);
            
            $p1->addCaracteristica('Cor', 'Branco');
            $p1->addCaracteristica('Peso', '2.5kg');
            $p1->addCaracteristica('Potência', '20 watts RMS');
            
            echo 'Produto: ' . $p1->getDescricao() . "<br>\n";
            foreach ($p1->getCaracteristicas() as $caracteristica){
                echo 'Caracteristica: ' . $caracteristica->getNome() . ' - '. $caracteristica->getValor() . "<br>\n";
            }
            
            
        ?>
    </body>
</html>
