<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

</head>
<body style="background-color:#a9cac3">


<div>
    <div class="nav">
        <a class="titulo" href="Index.php">INDEX</a>.
    </div>
    <form action="store.php" method="POST">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre Completo"/>

        <label for="email" />Email</label>
        <input type="email" name="email" id="email" placeholder="Email" required />

        <label for="nombre">Comentario</label>
        <textarea name="mensaje" for="mensaje" placeholder="Añade comentario" maxlength="300"></textarea>
        <label for="nombre">Ciudad</label>
        <select name="select">
            <option value="Guadalajara" selected>Guadalajara</option>
            <option value="Zapopan">Zapopan</option>
            <option value="Tonala">Tonala</option>
            <option value="Otra">Otra</option>
        </select>
        <br></br>

        <input type="submit" name="Enviar" value="Enviar datos"/>
    </form>
</div>
    <?php
        if(count($_POST) > 0 )
        {
            $nombre =  $_POST['nombre'];
            $email =  $_POST['email'];
            $mensaje =  $_POST['mensaje'];
            $ciudad =  $_POST['select'];
            $sql = "INSERT INTO solicitudes (nombre,comentario,email,ciudad)VALUES ('$nombre', '$mensaje', '$email', '$ciudad')";
              $conn->exec($sql);
        }

    ?>
</body>
</html>