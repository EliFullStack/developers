<?php
class Tarea {

    private $titulo;
    private $estado;
    private $horaInicio;
    private $horaFin;
    private $usuario;

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado): void
    {
        $this->estado = $estado;
    }

    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    public function setHoraInicio($horaInicio): void
    {
        $this->horaInicio = $horaInicio;
    }

    public function getHoraFin()
    {
        return $this->horaFin;
    }

    public function setHoraFin($horaFin): void
    {
        $this->horaFin = $horaFin;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario): void
    {
        $this->usuario = $usuario;
    }
}


?>