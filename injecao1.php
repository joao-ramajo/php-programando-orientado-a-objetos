<?php

require_once 'classes/Record.php';

class JSONExporter {
    public function export($data){
        return json_encode($data);
    }
}

class Pessoa extends Record{
    const TABLENAME = 'pessoas';

    public function toJSON(){
        $je = new JSONExporter;

        file_put_contents('injecao.json', $je->export($this->data));
        return $je->export($this->data);
    }
}

$p = new Pessoa;
$p->nome = "Maria das flores";
$p->endereco = "Rua da alegria";
$p->numer = "123";

print $p->toJSON();