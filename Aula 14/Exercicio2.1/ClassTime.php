<?php

class time {
    private $nome;
    private $anoFundacao;
    private $jogadores;


    public function __construct() {
        $this -> jogadores = Array();
    }


    public function addJogadores($jogador) {
        array_push($this -> jogadores, $jogador);
    }


    public function getNome() {
        return $this -> nome;
    }


    public function getAnoFundacao() {
        return $this -> anoFundacao;
    }


    public function getJogadores() {
        return $this -> jogadores;
    }


    public function setNome($nome) {
        $this -> nome = $nome;
    }


    public function setAnoFundacao($anoFundacao) {
        $this -> anoFundacao = $anoFundacao;
    }
}

?>