<?php

namespace App\Control;

use Livro\Control\Page;
use Livro\Widgets\Form\SimpleForm;
class SimpleFormControl extends Page
{
    public function __construct()
    {
        //parent::__construct();

        $form = new SimpleForm('my_form');

        $form->setTitle('Titulo');
        $form->addField('Nome', 'name', 'text', 'Maria', 'form-control');
        $form->addField('Endereço', 'endereco', 'text', 'Rua das flores', 'form-control');
        $form->addField('Telefone', 'fone', 'text', '(11) 94628-9761', 'form-control');
        $form->setAction('index.php?class=SimpleFormControl&method=onGravar');
        $form->show();
    }

    public function onGravar(){
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }
}