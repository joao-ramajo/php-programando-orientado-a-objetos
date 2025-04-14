<?php

$xml = simplexml_load_file('paises.xml');

$xml->moeda = 'Novo Real (NR$)';
$xml->geografia->clima = "Temperado";

$xml->addChild('presidente', 'Chapolin Colorado II');

file_put_contents('paises.xml', $xml->asXML());

