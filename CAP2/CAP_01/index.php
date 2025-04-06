<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>First attempt with php poo book</title>
    </head>
    <body>
        <?php
//            $fp = fopen ("./file.txt", "w");
//            fwrite($fp, "Teste de comandos do Livro PHP Orientado a Objetos" . PHP_EOL);
//            fwrite($fp, "Segunda linha via comandos internos" . PHP_EOL);
//            fwrite($fp, "Obrigado Marcel..." . PHP_EOL);
//            fclose($fp);
            
//            echo file_put_contents("./file.txt", "Estou alterando os dados do arquivo"); // Sobreescreve o contéudo
//            echo file_get_contents("./file.txt");  Retorna o conteúdo do arquivo em formato de string
            
//            $arquivo = file ("./file.txt");
//            foreach($arquivo as $linha) {
//                print $linha;
//                
//            }
        
//        $origem = ("./file.txt");
//        $destino = ("./data/file2.txt");
//        
//        if (copy($origem, $destino)){
//            echo "Arquivo copiado com sucesso para " . $destino;
//        }
//            else {
//                echo "Erro ao copiar arquivo";
//            }
        
//        $origem = "./arquivo_renomeado.txt";
//        $destino = "./data/arquivo_renomeado.txt";
//        if(rename($origem, $destino)){
//            echo "Arquivo renomeado com sucesso";
//        }
//        else{
//            echo "Erro ao renomear arquivo";
//        }
        
//        $arquivo = "./data/arquivo_renomeado.txt";
//              // UNLINK - Apagar arquivos        
//        if(unlink($arquivo)){
//            echo "Arquivo apagado";
//        }else{
//            echo "Erro ao apagar arquivo";
//        }
//        $arquivo = "./data/arquivo_renomeado.txt";
//        if(file_exists($arquivo)){ // FILE_EXISTS - Verificar a existencia do arquivo no caminho passado
//            echo "Arquivo encontrado no caminho " . PHP_EOL .$arquivo;
//        }else{
//            echo "Arquivo não encontrado no caminho " . "<br>" . $arquivo;
//        }
        
//        $dir = "./src";
//        
//        if(mkdir($dir, 0777)){
//            echo "Diretorio criado com sucesso";
//        }else{ /// MKDIR  - Cria um novo diretorio
//            echo "Erro ao criar novo diretorio";
//        }
        
//          $dir = "./src";
//          
//          if(rmdir($dir)){ /// RMDIR - Apagar um diretorio 
//              echo "Diretorio apagado com sucesso";
//          }else{
//              echo "Erro ao apagar diretorio";
//          }
          
          
//        $dir = "./";
//        
//        if(is_dir($dir)){ // Verifica se é um diretorio valido
//            $linhas = scandir($dir); // Lê o diretorio
//            foreach($linhas as $linha){ // Imprime o conteudo do diretorio
//                print $linha . "<br>" . PHP_EOL;
//            }
//        }

//        
        
//        $fruta = "Maça";
//        
//        print "Como $fruta <br>" . PHP_EOL;
//        print 'Como $fruta<br>' . PHP_EOL;

//        $texto = <<< CHAVE
//                Está área completa
//                seta interpretada
//                como uma string
//                mas de uma maneira que possa
//                ser escrita de maneira excessiva
//                utilizando uma palavra chave
//                <br>
//                CHAVE;
//        
//        echo $texto;
//        
//        $fruta = "Maça";
//        
//        echo "Podemos comer {$fruta} Assim<br>" . PHP_EOL;
//        echo "Ou podemos comer " . $fruta . " assim <br>" . PHP_EOL;
          
//        $br = '<br>' . PHP_EOL;
//        
//        $frase = <<<CHAVE
//                <br>
//                O rato <br>
//                Roeu <br>
//                A roupa <br>
//                Do rei <br>
//                De roma <br>
//                CHAVE;
//        
//        echo strtoupper($frase);
//        echo strtolower($frase);
//        print "<br>";
//        
//        echo substr("Brasileiro", 1) . "<br>" . PHP_EOL;
//        echo substr("Brasileiro", 1, 3) . "<br>" . PHP_EOL;
//        echo substr("Brasileiro", 0, -1) . '<br>' . PHP_EOL;
//        echo substr("Brasileiro", -2) . '<br>' . PHP_EOL;
//        
//        
//        $texto = "Imagine Dragons";
//        
//        print str_pad($texto, 20, "*", STR_PAD_LEFT) . "<br>" . PHP_EOL;
//        print str_pad($texto, 20, "*", STR_PAD_RIGHT) . "<br>" . PHP_EOL;
//        print str_pad($texto, 21, "*", STR_PAD_BOTH) . "<br>" . PHP_EOL;
//        print str_pad($texto, 20, "*") . "<br>" . PHP_EOL;
//        
//        $rep = "..ooOOoo..";
//        
//        print str_repeat($rep, 5) . "\n";
//        
        
        
//        $frase = "Tenho dias e dias, historias e historias";
//        
//        print "Comprimento: " . strlen($frase) . "\n" . PHP_EOL . '<br>';
//        
//        print str_replace('Rato', 'Leão', 'O Rato roeu a roupa do rei de roma');

        //$cores = array(0=>'Vermelho', 1=>'Azul', 2=>'Verde', 3=>'Amarelo');
        // $cores = array('Vermelho', 'Azul', 'Verde', 'Amarelo');
        // $cores = [ 'Vermelho', 'Azul', 'Verde', 'Amarelo');
        
        //$cores = array('vermelho' => 'FF0000', 'azul' => '0000FF', 'verde' => '00FF00');
       
//        $pessoa['nome'] = "Maria da Silva";
//        $pessoa['rua'] = "Rua das dores";
//        $pessoa['bairro'] = "Das ilusões";
//        $pessoa['cidade'] = "Pindamonhagaba";
//        
//        foreach($pessoa as $chave => $dados){
//            echo "$chave => $dados , <br>";
//        }
//       
//        $carros = array('Palio' => array('cor'=>'azul',
//                                        'potencia'=>'1.0',
//                                        'opcionais'=>'Ar condicionado.'),
//                        'Corsa' => array('cor'=>'Vermelho',
//                                        'potencia'=>'1.2',
//                                        'opcionais'=>'Hidraulica'),
//            );
//              
//        echo $carros['Corsa']['opcionais'];;

//        foreach($carros as $modelo => $caracteristicas){
//            echo "=> modelo $modelo <br>";
//            foreach ($caracteristicas as $caracteristica => $valor){
//                echo "- Caracteristica $caracteristica => $valor <br>";
//            }
//        }
        
//        $carros = array();
//        
//        $carros['Palio']['cor'] = 'Azul';
//        $carros['Palio']['Potencia'] = '1.0';
//        $carros['Palio']['opcionais'] = 'Ar Condicionado';
//       
//        
//        $a = array("Verde", "Azul", "Vermelho");
//        array_unshift($a, "Ciano");
//        array_push($a, "Amarelo");
//        
//        print_r($a);
//        
//        print("<br>" . PHP_EOL);
//        array_shift($a);
//        array_pop($a);
//        
//        print_r($a);
//        
//        print("<br>". PHP_EOL);
//        
//        $b = array_reverse($a, true);
//        print_r($b);
//        
//        $x = array("Direita", "Esquerda");
//        $y = array("Cima", "Baixo");
//        
//        $dir = array_merge($x, $y);
//        
//        print("<br>" . PHP_EOL);
//        
//        print_r($dir);
//        
//        $exemplo = array('cor' => 'Vermelho', 'volume'=> 5, 'animal' => 'cachorro');
//        print_r(array_keys($exemplo));
//        echo "<br>" . PHP_EOL;
//        print_r(array_values($exemplo));
//        echo "<br>" . PHP_EOL;
//        print "Quantidade: " . count($exemplo);
        
//        $a = array('Refrigerante', 'Cervejas', 'Sucos');;
//        
//        if(in_array('Sucos', $a)){
//            echo "Temos sucos disponiveis";
//        }
//        
//        sort($a);
//        
//        print_r($a);
            
        $string = "10/05/2015";
        print_r(explode("/", $string));
        print "<br>" . PHP_EOL;
        $array = [10, 05, 2015];
        print implode("/", $array);
        
        
        ?>
        
        
    </body>
</html>
