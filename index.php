<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica Conexion basica</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

</head>
<body style="background-color:#a9cac3">
<?php
    include("conexion.php");
?>

<div class="nav">
    <a href="formulario.php">FORMULARIO</a>.
</div>
<H2>
    Luis Eduardo Vazquez Rodriguez
</H2>
<section class="Acerca-Mi">
    <h1>Acerca de Mi</h1>
    <p>Soy un estudiante de la universidad de Cucei, estoy en la carrera de ingeniería de computación en la cual actualmente curso séptimo semestre,
        tengo 21 años, soy una persona muy callada, mis pasatiempos favoritos en la actualidad son leer, salir con mis amigos, juegar videojuegos, entre otras cosas.
    </p>
</section>
<hr>
<section class="Conocimientos" >
    <h1>Mis conocimientos</h1>
    <ul>
        <li>Progrmacion en C</li>
        <li>Base de datos</li>
        <li>Progrmacion en C++</li>
        <li>Edición de videos</li>
        <li>Seguridad en redes</li>
        <li>Progrmacion en Python</li>
    </ul>
</section>
<hr>
<section class="Fortaleza">
    <h1>Mis Fortalezas</h1>
    <ol>
        <li>Concentración mental</li>
        <li>Paciente</li>
        <li>Honestidad</li>

    </ol>
</section>
<hr>
<section class="Proyecto">
    <h1>Proyectos</h1>
    <table class="Proyecto" align="center">

        <tr>

            <td>Nombre proyecto</td>

            <td>Lenguajes</td>

            <td>Descripcion</td>

        </tr>

        <tr>

            <td>Videojuegos </td>

            <td>C++,libreria SFML</td>

            <td>
                Los proyectos consistían en realizar diversos videojuegos en los cuales la principal diferencia era la
                utilización de diversas estructuras de datos como colas, pilas, punteros y listas entre otras cosas,
                utilizábamos la librería SFML que nos permitía programar toda la interfaz gráfica de los programas y el lenguaje C++ para lo lógico del programa.
            </td>
        </tr>
        <tr>

            <td>Biblioteca</td>

            <td>Python,MYSQL,HTML,Javascript</td>

            <td>El proyecto consistía en la realización de una página web que simulaba la administración de una librería,
                el software estaba mas enfocado para las personas encargadas de la administración de libros, por ejemplo el software
                podía hacer prestamos e devoluciones de libros, también podíamos agregar, quitar, modificar libros, utilizaba una base de datos la cual nos daba toda la información de los libros existentes y a su vez está estaba  conectada a Python para realizar las peticiones.
            </td>

        </tr>
        <tr>

            <td>Pagina de musica</td>

            <td>HTML,PHP,MYSQL</td>

            <td>El proyecto consistía en una pagina donde los usuarios podían escuchar o descargar música,
                la pagina contaba con diversos géneros de música como albanés, y a su vez el usuario podía escuchar,
                descargar, añadir a su lista de reproducción, calificar entre otras cosas, de igual forma utilizaba una
                base de datos para controlar toda la información de la música como de los usuarios y utilizaba PHP para hacer la conexión y peticiones a esta.
            </td>

        </tr>

    </table>
</section>
<hr>
<section class="Admiro">
    <div>
        <h1 align="center">Persona que admiro</h1>
    </div>
    <div>
        <img src="Albert_Einstein.jpg"  width="200" height="200" align="left">
    </div>
    <div>
        <b style="color:#000000" >Albert_Einstein</b>
    </div>
    <p>
        Albert Einstein es quizá el científico mundialmente más conocido por el desarrollo de la Teoría de la Relatividad que revolucionó la ciencia conocida hasta el siglo XX.
        En 1921 obtuvo el Nobel de Física por sus explicaciones sobre el efecto fotoeléctrico e importante también fue el descubrimiento del movimiento browniano, auspiciado por Robert Brown en 1820 pero que había quedado sin explicación hasta entonces.
    </p>
    <a href="https://es.wikipedia.org/wiki/Albert_Einstein" target="_blank">Biografia de Albert_Einstein</a>
</section>

<br><br><br><br>
<hr>
<?php
    include("conexion.php");

    echo '<center><span text-align: center; style="color:#a42706;font-size:25px;">Personas interesadas</span></center>';
    //$sql = "SELECT * FROM solicitudes";
    //$stml = $conn -> prepare($sql);
    //$stml -> execute();
    //$stmt -> setFetchMode(PDO::FETCH_ASSOC);

    //foreach($result->fetchAll() as $row)
    //{
      //  echo $row['nombre'];
    //}

    $query= $conn->query('select * from solicitudes');
    $query->setFetchMode(PDO::FETCH_ASSOC);
        while ($row = $query->fetch()) {
            echo "ID:" .$row['id'] . "<br/>";
            echo "Nombre:" .$row['nombre'] . "<br/>";
            echo "Comentario:" .$row['comentario'] . "<br/>";
            echo "Email:" .$row['email'] . "<br/>";
            echo "Ciudad:" .$row['ciudad'] . "<br/>";
            echo "<br/><br/>";
        }

?>
<div class="footer">
    <section>
        <p>Contactame</p>
        <p>Telefono:3338099841</p> 
        <p>Correo: <a href="mailto:luis.vazquez2941@alumnos.udg.mx">luis.vazquez2941@alumnos.udg.mx</a> </p>
    </section>

</div>

</body>
</html>