<?php
include("./conexion.php");

$boleta = $_POST['boleta'];
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$semestre = $_POST['semestre'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$pass = $_POST['pass'];

if (consultarExistencia($conexion, $boleta)) {
    echo "<script>
    alert('ERROR: Boleta ya registrada.');
    window.history.back();
    </script>";
} else {
    registrarAlumno($conexion, $boleta, $nombre, $paterno, $materno, $semestre, $direccion, $email, $pass);
    if (consultarExistencia($conexion, $boleta)) {
        echo "<script>
            alert('Exito al regisrarse.');
            location.href = 'http://localhost/bibliotescom/';
        </script>";
    } else {
        echo "<script>
            alert('ERROR: No se pudo registrar al alumno. Intente más tarde');
            window.history.back();
        </script>";
    }
}