<?php

class Computador {
    private $estado;


    public function ligar() {
        $this -> estado = 'Ligado';
        $this -> escreveEstado();
    }

    
    public function desligar() {
        $this -> estado = 'Desligado';
        $this -> escreveEstado();
    }


    public function getStatus() {
        return $this -> estado;
    }


    private function escreveEstado() {
        echo $this -> getStatus();
    }
}

?>