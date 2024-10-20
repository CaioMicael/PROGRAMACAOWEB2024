<?php 
require_once "ClassEndereco.php";
require_once "ClassContato.php";

class pessoa {
    private $nome;
    private $sobrenome;
    private $dataNascimento;
    private $cpfcnpj;
    private $tipo;
    private $telefone;
    private $endereco;

    public function __construct() {
        $this -> inicializaClasse();
    }

    public function __toString()  {
        return $this -> toJson();
    }

    private function toJson() {
        return json_encode(get_object_vars($this));
    }

    private function inicializaClasse() {
        $this -> telefone = new contato;
        $this -> endereco = new endereco;
    }

    public function getNomeCompleto() {
        return $this -> nome . " " . $this -> sobrenome;
    }

    public function getNome() {
        return $this -> nome;
    }

    public function getSobrenome() {
        return $this -> sobrenome;
    }

    public function getDataNascimento() {
        return $this -> dataNascimento;
    }

    public function getCpfCnpj() {
        return $this -> cpfcnpj;
    }

    public function getTipo() {
        return $this -> tipo;
    }

    public function getTelefone() {
        return $this -> telefone;
    }

    public function getEndereco() {
        return $this -> endereco;
    }

    public function setNome($nome) {
        $this -> nome = $nome;
    }

    public function setSobrenome($sobrenome) {
        $this -> sobrenome = $sobrenome;
    }

    public function setDataNascimento($dataNascimento) {
        $this -> dataNascimento = $dataNascimento;
    }

    public function setCpfCnpj($cpfcnpj) {
        $this -> cpfcnpj = $cpfcnpj;
    }

    public function setTipo($tipo) {
        $this -> tipo = $tipo;
    }

}


?> 