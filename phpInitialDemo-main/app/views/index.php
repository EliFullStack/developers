<?php

$tareas = [];
if(file_exists("todo.json")){
$json = file_get_contents("todo.json");
$tareas = json_decode($json, true);
} 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>To Do List</title>
</head>
<body class="container mx-auto">
    <p class="text-4xl font-bold m-5 text-center capitalize">My first
    <span class="italic decoration-2"> 'TO-DO'  </span> list</p>

    <div class="flex mt-10">
        <div class="w-1/3 text-2xl uppercase">Crear tarea
            <div>
                <form action="new_todo.php" method="post">
                <input class=" text-xl border p-2 pr-10 mr-2 shadow-md rounded italic w-96 mb-10 mt-5" type="text" name="todo_name" placeholder="Ingresar tarea">
                <div class="mb-5">
                    <label class="text-lg py-3 pb-2" for="status">Estado</label>
                        <select class="italic text-base py-2 px-2 bg-white border rounded-md drop-shadow-md" name="status" id="status">
                            <option value="to do">Pendiente</option>
                            <option value="doing">En ejecución</option>
                            <option value="done">Finalizada</option>
                        </select>
                </div>
                <button class="text-base bg-green-500 hover:bg-green-700 rounded font-semibold uppercase py-2 px-3 text-white" type="submit">Agregar</button>
                </form>
            </div>
        </div>
        <div class="w-2/3 text-2xl uppercase">Lista de tareas
            <div class="mt-5">
            <table class="border border-slate-300 rounded w-full">
                    <thead class="text-base capitalize py-5 pb-2 font-normal">
                        <tr>
                            <th class="border border-slate-300" scope="col">Nro</th>
                            <th class="border border-slate-300" scope="col">Despcripción</th>
                            <th class="border border-slate-300" scope="col">Estado</th>
                            <th class="border border-slate-300" scope="col">Fecha</th>
                            <th class="border border-slate-300" scope="col">Usuario</th>
                            <th class="border border-slate-300" scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-base uppercase">
                        <?php foreach ($tareas as $todoName => $tarea): ?>
                        <tr>
                            <th></th>
                            <td class="border border-slate-300"><?php echo $todoName; ?></td>
                            <td class="border border-slate-300"></td>
                            <td class="border border-slate-300"></td>
                            <td class="border border-slate-300" ></td>
                            <td class="w-48 pb-2">
                                <a class="text-base bg-orange-500 hover:bg-orange-700 rounded font-semibold uppercase py-1 px-5 text-white" href="#">Editar</a>
                                <a class="text-base bg-red-500 hover:bg-red-700 rounded font-semibold uppercase py-1 px-2 text-white" href="#">Eliminar</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
            </div>
        </div>
    </div>



    
</body>
</html>