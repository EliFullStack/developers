<?php

interface Ipersistencia{

    public function agregarTarea (Tarea $tarea);
    public function obtenerTareas();
    public function obtenerTarea($nombreTarea);
    public function eliminarTarea($nombreTarea);
    public function actualizarTarea(Tarea $tarea, $nombreActualTarea);
}


?>