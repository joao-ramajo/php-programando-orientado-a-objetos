<?php

final class Connection
{
    private function __construct() {}

    public static function open($name)
    {
        if (file_exists("./config/{$name}.ini")) {
            $db = parse_ini_file("./config/{$name}.ini");
        } else {
            throw new Exception("Arquivo $name não encontrado");
        }

        $user = isset($db['user']) ? $db['user'] : NULL;
        $pass = isset($db['pass']) ? $db['pass'] : NULL;
        $name = isset($db['name']) ? $db['name'] : NULL;
        $host = isset($db['host']) ? $db['host'] : NULL;
        $type = isset($db['type']) ? $db['type'] : NULL;
        $port = isset($db['port']) ? $db['port'] : NULL;

        switch ($type) {
            case 'sqlite':
                $conn = new PDO("sqlite:{$name}");
                break;
        }

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}
