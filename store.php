<?php
include("conexion.php");
if(count($_POST) > 0 )
{
    $nombre =  $_POST['nombre'];
    $email =  $_POST['email'];
    $mensaje =  $_POST['mensaje'];
    $ciudad =  $_POST['select'];
    $sql = "INSERT INTO solicitudes (nombre,comentario,email,ciudad)VALUES ('$nombre', '$mensaje', '$email', '$ciudad')";
        $conn->exec($sql);
}
       header('Location: index.php');
?>