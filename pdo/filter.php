<?php 

require_once './classes/api/Filter.php';
require_once './classes/api/Expression.php';


$filter1 = new Filter('data', '=', '2007-06-02');
print $filter1->dump() . PHP_EOL;

$filter2 = new Filter('salario', '>', 3000);
print $filter2->dump() . PHP_EOL;

