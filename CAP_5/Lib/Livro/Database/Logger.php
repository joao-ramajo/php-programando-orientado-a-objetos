<?php
namespace Livro\Database;

abstract class Logger
{
    protected $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
        file_put_contents($filename, '');
    }

    abstract function write($message);
}

// public      // Qualquer um pode acessar dentro ou fora do objeto
// private     // Somente o objeto pode acessar
// protected   // Somente o objeto e suas classes filhas podema acessar
// Conta (abstract sacar) -> suas filhas tem que conter o metodo sacar