<?php

Class endereco{
    private $logradouro;
    private $bairro;
    private $cidade;
    private $estado;
    private $cep;

    public function __toString()  {
        return $this -> toJson();
    }

    private function toJson() {
        return json_encode(get_object_vars($this));
    }

    public function getLogradouro() {
        return $this -> logradouro;
    }

    public function getBairro() {
        return $this -> bairro;
    }

    public function getCidade() {
        return $this -> cidade;
    }

    public function getEstado() {
        return $this -> estado;
    }

    public function getCep() {
        return $this -> cep;
    }

    public function setLogradouro($logradouro) {
        $this -> logradouro = $logradouro;
    }

    public function setBairro($bairro) {
        $this -> bairro = $bairro;
    }

    public function setCidade($cidade) {
        $this -> cidade = $cidade;
    }

    public function setEstado($estado) {
        $this -> estado = $estado;
    }

    public function setCep($cep) {
        $this -> cep = $cep;
    }
}

?>