<?php 

$ingredientes = new SplQueue();
$ingredientes->enqueue('peixe');
$ingredientes->enqueue('Sal');
$ingredientes->enqueue('Limão');

foreach($ingredientes as $item){
    print  'Item: ' . $item . PHP_EOL;
}

print PHP_EOL;

print $ingredientes->dequeue() . PHP_EOL;
print $ingredientes->dequeue() . PHP_EOL;
