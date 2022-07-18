<?php

class PersistenciaJSON implements IPersistencia{

    private $jsonArray;

    public function __construct(){
        if(file_exists("json/tareas.json")){
            $json = file_get_contents("json/tareas.json");
            $todaTareas = json_decode($json, true);
        } else {
            $todaTareas = [];
        }

        $this->jsonArray = $todaTareas;
    }


    public function agregarTarea (Tarea $tarea){

        $estado =$tarea->getEstado();

        $this->jsonArray[$tarea->getTitulo()] =["estado"=>$estado, "date"=>$tarea->getDate() ,"horaInicio"=>$tarea->getHoraInicio(), "horaFin"=>$tarea->getHoraFin(), "usuario"=>$tarea->getUsuario()];

        file_put_contents("json/tareas.json", json_encode($this->jsonArray, JSON_PRETTY_PRINT));

    }

    public function obtenerTareas(){

        $listaTares=[];

        foreach ($this->jsonArray as $nombreTarea => $datos){
            $listaTares [] = $this->obtenerTarea($nombreTarea);
        }

        return $listaTares;
    }

    public function obtenerTarea($nombreTarea){
        $tarea = new Tarea();

        $tareaJson = $this->jsonArray[$nombreTarea];
       // var_dump($tareaJson);
       // exit;
        $tarea->setTitulo($nombreTarea);
        $tarea->setEstado($tareaJson['estado']);
        $tarea->setDate($tareaJson['date']);
        $tarea->setHoraInicio($tareaJson['horaInicio']);
        $tarea->setHoraFin($tareaJson['horaFin']);
        $tarea->setUsuario($tareaJson['usuario']);

        return $tarea;

    }

    public function eliminarTarea($nombreTarea){
        unset($this->jsonArray[$nombreTarea]);
        file_put_contents("json/tareas.json", json_encode($this->jsonArray, JSON_PRETTY_PRINT));
    }

    public function actualizarTarea(Tarea $tarea, $nombreActualTarea){
        unset($this->jsonArray[$nombreActualTarea]);
        $this->agregarTarea($tarea);
    }
}