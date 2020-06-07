<?php
session_start();
if (isset($_SESSION['usuario'])) {
    echo "Hola: " . $_SESSION['usuario'];
}
?>

<!DOCTYPE HTML>
<html>
<!--lang="en" este seria si nosotros realizamos pagina en ingles-->

<head>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>Biblioteca Virtual</title>
    <link rel="stylesheet" type="text/css" href="css/CSSPrincipal.css">
    <style>


    </style>
</head>

<link rel="stylesheet" type="text/css" href="css/CSSPrincipal.css">

<body>

    <div style="background-color: #F1F1F1; padding: 10px;"></div>
    <div class="div1"></div>
    <header>
        <nav class="menuBV">
            <ul class="Menu">
                <li><a href="#">Mapa Interactivo</a></li>
                <li><a href="#">Menu de Información</a>
                    <ul class="menMenu">
                        <li><a href="#">Documentos</a></li>
                        <li><a href="#">Directorio</a></li>
                        <li><a href="#">Horario</a></li>
                        <li><a href="#">Comentarios</a></li>
                    </ul>
                </li>
                <li><a href="#">Estado de Libros</a></li>
                <li><a href="#">Sesion</a>
                    <ul class="menSesion">
                        <li><a href="IniciarSesion.php">Iniciar</a></li>
                        <li><a href="Registrarse.php">Registrarse</a></li>
                        <li><a href="php/funciones/logOut.php">Cerrar Sesion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <div class="Imgdiv">
        <img src="img/BibliotescomLogo.png" class="imgnLogo">
    </div>
    <div class="imgServ">
        <img src="img/MapaLocalización.png" class="ServImg">
        <img src="img/Prestamo.png" class="ServImg">
        <img src="img/EstadoLibros.png" class="ServImg">
    </div>

    <div class="footer">
        <p>&copy; BIBLIOTESCOM</p>
    </div>

</body>

</html>