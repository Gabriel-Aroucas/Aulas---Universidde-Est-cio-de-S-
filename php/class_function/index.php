<?php
class pessoa{
    private $nome;
    private $idade;

    public function __construct($nome = "", $idade =0){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo($this-> nome + "foi removido(a).");
        
    }
}