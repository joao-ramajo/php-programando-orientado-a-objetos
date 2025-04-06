<?php
require_once "CSVParser.php";
class FileNotFoundException extends Exception{}
class FilePermissionExcpetion extends Exception{}

$csv = new CSVParser('.a/clientes.csv', ';');


try{    
    $csv->parse();

    while($row = $csv->fetch()){
        print $row['Cliente'] . " - " . $row['Cidade'] . PHP_EOL;
    }
    
}
catch(FileNotFoundException $e){
    print_r($e->getTrace());
    print $e->getMessage();
    die();
}
catch(FilePermissionExcpetion $e){
    echo $e->getFile() . ' : ' . $e->getLine() . ' # ' . $e->getMessage();
}