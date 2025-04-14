<?php

$file = new SplFileObject('spl_file_object.php');
$cont = 0;
print 'Forma 1: ' . PHP_EOL;
while(!$file->eof()){
    $cont++;
    print 'Linha '.$cont.' : ' . $file->fgets();
}

print PHP_EOL.PHP_EOL.PHP_EOL.PHP_EOL;

foreach($file as $linha => $conteudo){
    print "$linha: $conteudo";
}