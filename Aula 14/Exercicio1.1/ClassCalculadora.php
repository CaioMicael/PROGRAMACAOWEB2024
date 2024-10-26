<?php

Class Calculadora {
    private $operador1;
    private $operador2;

    public function somar() {
        echo $this -> getOperador1() + $this -> getOperador2();
    }

    public function subtrair() {
        echo $this -> getOperador1() - $this -> getOperador2();
    }

    public function multiplicar() {
        echo $this -> getOperador1() * $this -> getOperador2();
    }

    public function dividir() {
        echo $this -> getOperador1() / $this -> getOperador2();
    }

    public function getOperador1() {
        return $this -> operador1;
    }

    public function getOperador2() {
        return $this -> operador2;
    }

    public function setOperador1($operador1) {
        $this -> operador1 = $operador1;
    }

    public function setOperador2($operador2) {
        $this -> operador2 = $operador2;
    }
}

?>