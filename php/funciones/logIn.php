<?php
include("./conexion.php");

session_start();

$boleta = $_POST['boleta'];
$pass = $_POST['pass'];

if (validarLogIn($boleta, $pass, $conexion)) {

    $_SESSION["usuario"] = $boleta;

    echo "
    <script>
        alert('Exito al entrar/Sesion creada.');
        location.href = 'http://localhost/bibliotescom/index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('USUARIO o CONTRASEÑA no valido');
        window.history.back();
    </script>
    ";
}