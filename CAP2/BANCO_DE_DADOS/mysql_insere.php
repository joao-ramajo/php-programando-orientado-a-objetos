<?php

$conn = mysqli_connect("127.0.0.1", 'root', '', 'livro');

if($conn){
    echo "Conectado ao banco de dados <br>\n";
}else{
    echo "Erro ao conectar com o banco de dados";
}

mysqli_query($conn, "TRUNCATE famosos");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (1, 'Érico Verissimo')");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (2, 'Jogn Lennon')");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (3, 'Magatma Gandhi')");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (4, 'Ayrton Senna')");


mysqli_close($conn);