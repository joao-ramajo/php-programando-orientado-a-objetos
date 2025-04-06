<?php

try {
    $conn = new PDO('mysql:unix_socket=/tmp/mysql.sock;host=localhost;port=3306;dbname=livro', 'root', '');
    if ($conn) {
        print 'Conectado ao banco de dados';
    }

    $conn->exec("INSERT INTO famosos(codigo, nome) VALUES(1, 'Erico verissimo')");
    $conn->exec("INSERT INTO famosos(codigo, nome) VALUES(2, 'John Lennon')");
    $conn->exec("INSERT INTO famosos(codigo, nome) VALUES(3, 'Paul Macartney')");
    $conn->exec("INSERT INTO famosos(codigo, nome) VALUES(4, 'Cesar Julio')");

    $conn = null;

    if ($conn == null) {
        print 'Desconectado do banco de dados';
    }
} catch (PDOException $e) {
    print 'Erro: ' . $e->getMessage();
}
