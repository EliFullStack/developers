<?php
class TareasController extends Controller {

    private $ipersistencia;

    public function __construct(){
        $this->ipersistencia = new PersistenciaJSON();
    }


    public function listarTareasAction() {
        //echo "hola desde listarTareas!";
        $tareas = $this->ipersistencia->obtenerTareas();

        $this->view->tareas = $tareas;

    }

    public function  listarTareaAction(){
        //echo "hola desde listarTarea!";
        $this->view->tarea = $this->ipersistencia->obtenerTarea($_POST['titulo']);
    }

    public function nuevaTareaAction(){
        //echo "hola desde nuevaTarea!";
        $tarea = new Tarea();

        $todoName = $_POST ["todo_name"] ?: '';
        $todoName = trim($todoName);

        $tarea->setTitulo($todoName);
        $this->ipersistencia->agregarTarea($tarea);

        header ("Location: ".WEB_ROOT."/tareas/listarTareas");

    }

    public function actualizarTareaAction(){
        //echo "hola desde actualizarTarea!";
        $tarea = new Tarea();

        $tarea->setTitulo($_POST['titulo']);
        $tarea->setEstado($_POST['estado']);
        $tarea->setDate($_POST['date']);
        $tarea->setHoraInicio($_POST['horaInicio']);
        $tarea->setHoraFin($_POST['horaFin']);
        $tarea->setUsuario($_POST['usuario']);

        $this->ipersistencia->actualizarTarea($tarea, $_POST['tituloAnterior']);

        header ("Location: ".WEB_ROOT."/tareas/listarTareas");

    }

    public function eliminarTareaAction(){
        //echo "hola desde eliminarTarea!";
        $this->ipersistencia->eliminarTarea($_POST['titulo']);
        header ("Location: ".WEB_ROOT."/tareas/listarTareas");

    }
}


?>