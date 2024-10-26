<?php
require_once 'ClassUsuario.php';

class session {
    public $sessionid;
    public $status;
    public $usuario;
    private $dataHoraInicio;
    private $dataHoraUltimoAcesso;


    public function __construct() {
        $this -> usuario = new usuario;
    }

    public function iniciaSessao() {
        if (session_start()) {
            if (isset($_SESSION['start'])) { //Se a sessão já está definida, reinicia a mesma
                $this -> setStatus(3);
                $this -> setDataHoraInicio($_SESSION['start']);
            }
            else { // Se não está definida, define
                $this -> setSessionid(session_id());
                $this -> setStatus(1);
                $this -> setDataHoraInicio(time());
            }

        }
    }


    public function getSessionid() {
        return $this -> sessionid;
    }


    public function getStatus() {
        return $this -> status;
    }


    public function getDataHoraInicio() {
        return $this -> dataHoraInicio;
    }


    public function getDataHoraUltimoAcesso() {
        return $this -> dataHoraUltimoAcesso;
    }


    public function setSessionid($sessionid) {
        $this -> sessionid = $sessionid;
    }


    public function setStatus($status) {
        $this -> status - $status;
    }


    public function setDataHoraInicio($data) {
        $this -> dataHoraInicio = $data;
    }


    public function setDataHoraUltimoAcesso($data) {
        $this -> dataHoraUltimoAcesso = $data;
    }
}

?>