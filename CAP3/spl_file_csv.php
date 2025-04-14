<?php

$dados = array(
    array('codigo', 'nome', 'endereco', 'telefone'),
    array('1', 'Maria da Silva', 'Rua da Maria', '(11) 12345679'),
    array('2', 'Pedro Cardoso', 'Rua das graças', '(11) 123457898'),
    array('3', 'Joana Peleira', 'Rua crop', '(11) 11946756')
);

$file = new SplFileObject('dados.csv', 'w');
$file->setCsvControl(',');

foreach($dados as $linha){
    $file->fputcsv($linha);
}