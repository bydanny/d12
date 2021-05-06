<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> FORMULARIO d12</h1>
    <form action="store.php" method="POST">
        <label for="tarea">Nombre Tarea</label> <br>
        <input type="text" name="tarea">
        <br>
        <label for="descripcion">descripcion</label> <br>
        <input name="descripcion">
        <br>
        <label for="prioridad">Prioridad</label> <br>
        <select name="prioridad" >
            <option value="alta">alta</option>
            <option value="media">media</option>
            <option value="baja">baja</option>
        </select> 
    <br>
        <input type="checkbox" name="urgente" value="1">
        <label for="urgente">Urgente</label>
    <br>
        <input type="radio" name="tipo" value="escuela">
        <label for="tipo">escuela</label>
    <br>
        <input type="radio" name="tipo" value="trabajo">
        <label for="tipo">trabajo</label>

        <input type="submit" value="Enviar">
        
    </form>

    <h2>Datos enviados</h2>

</body>
</html>