<div class= "container mx-auto mt-5 font-mono text-2xl uppercase"> Actualizar tarea
<form class="mt-10 text-lg" action="/Developers/phpInitialDemo-main/web/tareas/actualizarTarea" method="post">
    <label class="mr-5" for="">Título:</label>
    <input type="text" name="titulo" id="" value="<?php echo $this->tarea->getTitulo() ?> ">
    <br>
    <label class="mr-5" for="">Estado:</label>
    <select class="text italic bg-grey-300" name="estado" id="">
        <option value="Pendiente" <?php echo $this->tarea->getEstado()=="Pendiente" ? "selected": "" ?>>Pendiente</option>
        <option value="En ejecución" <?php echo $this->tarea->getEstado()=="En ejecución" ? "selected": "" ?> >En ejecución</option>
        <option value="Finalizada" <?php echo $this->tarea->getEstado()=="Finalizada" ? "selected": "" ?>>Finalizada</option>
    </select>
    <br>
    <label class="mr-5" for="">Hora inicio:</label>
    <input type="time" name="horaInicio" min="08:00" max="18:00" step="3600" id="" value="<?php echo $this->tarea->getHoraInicio() ?> ">
    <br>
    <label class="mr-5" for="">Hora fin:</label>
    <input type="time" name="horaFin" min="08:00" max="18:00" step="3600" id="" value="<?php echo $this->tarea->getHoraFin() ?> ">
    <br>
    <label class="mr-5" for="">Usuario:</label>
    <input type="text" name="usuario" id="" value="<?php echo $this->tarea->getUsuario() ?> ">
    <br>
    <input type="hidden" value="<?php echo $this->tarea->getTitulo() ?>" name="tituloAnterior">
    <button class="text-base bg-green-500 hover:bg-green-700 rounded font-semibold uppercase py-1 px-5 text-white mt-5">Actualizar</a>

</form>
</div>