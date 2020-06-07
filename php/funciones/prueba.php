<?php
include("./conexion.php");

$boleta = '2015083333';
$nombre = 'David';
$paterno = 'David';
$materno = 'David';
$semestre = '2';
$direccion = 'Bugambilia,9,Sta Rosa de Lima,Cuautitlan Izcalli';
$email = 'david-balta@hotmail.com';
$pass = '123';

//registrarAlumno($conexion, $boleta, $nombre, $paterno, $materno, $semestre, $direccion, $email, $pass);
if (consultarExistencia($conexion, $boleta)) {
    echo "Existe";
} else {
    echo "No existe";
}