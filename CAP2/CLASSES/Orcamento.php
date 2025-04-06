<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Orcamento
 *
 * @author Ramajo
 */
class Orcamento {
    private $itens;
    
    public function adiciona(OrcavelInterface $produto, $qtde){
        $this->itens[] = array($qtde, $produto);
    }
    
    public function calculaTotal(){
        $total = 0;
        
        foreach($this->itens as $item){
            $total += ($item[0] * $item[1]->getPreco());
        }
        return $total;
    }
}
