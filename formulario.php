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
    <form action="Index.php" method="GET">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre Completo"/>
        <label for="email" />Email</label>
        <input type="email" name="email" id="email" placeholder="Email" required />
        <label for="nombre">Genero</label><br>
        <input type="radio" id="masculino" name="genero" value="masculino">
        <label for="masculino">Masculino</label>
        <input type="radio" id="femenino" name="genero" value="femenino">
        <label for="femenino">Femenino</label>
        <br>
        <label for="contraseña">Contraseña</label>
        <input type= "password" name="contraseña" id="contraseña" placeholder="Contraseña" required/>
        <br>
        <label for="nombre">Comentario</label>
        <textarea name="mensaje" for="mensaje" placeholder="Añade comentario" maxlength="300"></textarea>
        <label for="nombre">Ciudad</label>
        <select name="select">
            <option value="value1" selected>Guadalajara</option>
            <option value="value2">Zapopan</option>
            <option value="value3">Tonala</option>
            <option value="value4">Otra</option>
        </select>
        <br></br>
        <label for="nombre">Me interesa contratarte</label>
        <label><input type="checkbox" name="cb-html5" checked></label><br>

        <input type="submit" name="Enviar" value="Enviar datos"/>
    </form>
</div>
</body>
</html>