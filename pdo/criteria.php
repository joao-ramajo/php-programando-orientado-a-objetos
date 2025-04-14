<?php 

require_once 'classes/api/Expression.php';
require_once 'classes/api/Criteria.php';
require_once 'classes/api/Filter.php';

$criteria = new Criteria;
$criteria->add(new Filter('idade','<', 16), Expression::OR_OPERATOR);
$criteria->add(new Filter('idade', '>', 16), Expression::OR_OPERATOR).
print $criteria->dump() . PHP_EOL;

$criteria = new Criteria;
$criteria->add(new Filter('idade', 'IN', array(20, 16, 43)));
$criteria->add(new Filter('idade', 'NOT IN', array(10)));
print $criteria->dump() . PHP_EOL;

$criteria = new Criteria;
$criteria->add(new Filter('nome', 'like', 'pedro%'), Expression::OR_OPERATOR);
$criteria->add(new Filter('nome', 'like', 'maria%'), Expression::OR_OPERATOR);
print $criteria->dump() . PHP_EOL;

$criteria = new Criteria;
$criteria->add(new Filter('UF', 'IN', array('RS', 'SC', 'PR')));
$criteria->add(new Filter('UF', 'NOT IN', array('AC', 'PI')));
print $criteria->dump() . PHP_EOL;
