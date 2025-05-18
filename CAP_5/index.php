<?php
require "./vendor/autoload.php";


// Verifica se os parâmetros foram passados
if (isset($_GET['class']) && isset($_GET['method'])) {
    $class = 'App\\Control\\' . $_GET['class'];  // Ex: App\Control\CidadeController
    $method = $_GET['method'];                  // Ex: listar
    if (class_exists($class)) {
        $controller = new $class();

        if (method_exists($controller, $method)) {
            // Executa o método
            $controller->$method();
        } else {
            echo "Método '{$method}' não encontrado na classe '{$class}'.";
        }
    } else {
        echo "Classe '{$class}' não encontrada.";
    }
} else {
    echo "Parâmetros 'class' e 'method' são obrigatórios.";
}

