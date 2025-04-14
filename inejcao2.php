<?php

require_once 'classes/Record.php';

interface ExporterInterface{
    public function export($data);

}

class XMLExporter implements ExporterInterface{
    public function export($data)
    {
        $data = array_flip($data);
        $xml = new SimpleXMLElement('<record/>');
        array_walk_recursive($data, array ($xml, 'addChild'));
        return $xml->asXML();
    }

}

class JSONExporter implements ExporterInterface{
    public function export($data){
        return json_encode($data);
    }
}