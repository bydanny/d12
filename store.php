
<?php 
include('conexion.php');
        if(!empty($_POST['tarea'])){
        $tarea = $_POST['tarea'];
        $descripcion = $_POST['descripcion'];
        $urgente = $_POST['urgente'];
        $tipo = $_POST['tipo'];
        $prioridad = $_POST['prioridad'];

        $sql = "INSERT INTO tareas(tarea,descripcion, prioridad, urgente, tipo ) VALUES ('$tarea','$descripcion','$prioridad','$urgente','$tipo')";
        $conn->exec($sql);

        header('Location: index.php');
        }else{
            echo "No hay datos";
        }


       // var_dump($_POST);
    ?>