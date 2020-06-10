<?php
include("./conexion.php");

session_start();

$boleta = $_POST['boleta'];
$pass = $_POST['pass'];

if (validarLogIn($boleta, $pass, $conexion)) {

    $_SESSION["usuario"] = $boleta;

    echo "
    <script>
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