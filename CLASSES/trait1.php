<?php

require_once 'classes/Record.php';
require_once 'classes/trait2.php';

class Pessoa extends Record
{
    const TABLENAME = 'pessoas';
    use ObjectConversionTrait{
        toJSON as exportToJSON;
    }
}

class Fornecedor extends Record
{
    const TABLENAME = 'fornecedores';
}

class Produto extends Record
{
    const TABLENAME = 'produtos';
}

$p = new Pessoa;
// $p->load(1);
print PHP_EOL;
$p->nome = 'Maria da silva';
$p->endereco = 'Rua das flores';
$p->numero = '123';
// $p->save();

print $p->toXML();
print PHP_EOL;
print $p->exportToJSON();