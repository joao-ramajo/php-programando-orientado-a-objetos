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
            require_once 'classes/Preferencias.php';
            
            $p1 = Preferencias::getInstance();
            
            
            print 'A linguagem é ' . $p1->getData('language') . "<br>";
            
            $p1->setData('language', 'en');
            print 'A linguagem é ' . $p1->getData('language') . "<br>";
            
            $p1->setData('language', 'pt-BR');    
            $p1->setData('city', 'Carapicuiba');
            $p1->setData('user', 'Ramajo');
            
            $p1->save();
            
//            print "A linguagem é {$p1->getData('language')} e você mora em {$pq->getData('city')}"
            
        ?>
    </body>
</html>
