<?php 

try {
    $conn = new PDO('mysql:unix_socket=/tmp/mysql.sock;host=localhost;port=3306;dbname=livro', 'root', '');

    $result = $conn->query('SELECT codigo, nome FROM famosos');
    $cont = 0;
    if($result){
        foreach($result as $row){
            $cont++;
            print $row['codigo'] . ' - ' . $row['nome'] . PHP_EOL;
        }
        print PHP_EOL . PHP_EOL;
        print $cont . ' Resultados encontrados.'; 
    }

    $conn = null;
} catch(PDOException $e)
{
    print 'Erro: ' . $e->getMessage() . PHP_EOL;
}