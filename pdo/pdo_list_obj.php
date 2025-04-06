<?php

try {
    $conn = new PDO('mysql:unix_socket=/tmp/mysql.sock;host=localhost;port=3306;dbname=livro', 'root', '');

    $result = $conn->query('SELECT * FROM famosos');

    if($result){
        while ($row = $result->fetch(PDO::FETCH_OBJ)){
            print $row->codigo . ' - ' . $row->nome . PHP_EOL;
        }
    }

    $conn = null;

} catch (PDOException $e) {
    print 'Erro: ' . $e->getMessage();
}
