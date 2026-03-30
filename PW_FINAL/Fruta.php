<?php
class Fruta
{
    // Properties
    private $nome;
    private $cor;

    function __construct() {
        $this->nome = "";
        $this->cor = "";
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setCor($cor) {
        $this->cor = $cor;
    }
    public function getCor() {
        return $this->cor;
    }

    // Method to display the properties
    public function __tostring() {
        return "Fruta:\n " . 
        "Nome: {$this -> nome} \n" .
        "Cor: " . $this->cor . "\n";
    }
}
?>