<?php

$conexion = mysqli_connect("localhost:3308", "root", "", "bibliotescom");

if (mysqli_connect_errno()) {
    //Error al iniciar la conexion
    die("Problemas al conectarse a la BD: " . mysqli_connect_errno());
} else {
    //Conexion exitosa
}

function validarLogIn($boleta, $pass, $conexion)
{
    // $query = "SELECT COUNT(*) as contar FROM alumno WHERE  boleta = '$boleta' and pass = '$pass';";
    // $respuesta = mysqli_query($conexion, $query);
    // $array = mysqli_fetch_array($respuesta);
    // if ($array['contar'] == 0) {
    //     echo "<script>
    //         alert('Acceso denegado');
    //     </script>";
    // } else {
    //     echo "<script>
    //         alert('Bienvenido');
    //     </script>";
    // }

    // return;

    $res = mysqli_query($conexion, "SELECT * FROM alumno WHERE boleta = '$boleta' and pass = '$pass';");
    if ($res->num_rows == 1) {
        return true;
    } else {
        return false;
    }
}

function consultarExistencia($conexion, $boleta)
{
    $res = mysqli_query($conexion, "SELECT * FROM alumno WHERE boleta = $boleta;");
    if ($res->num_rows >= 1) {
        return true;
    } else {
        return false;
    }
}

function registrarAlumno($conexion, $boleta, $nombre, $paterno, $materno, $semestre, $direccion, $email, $pass)
{
    return mysqli_query($conexion, "INSERT INTO alumno(boleta,nombre,paterno,materno,semestre,direccion,email,pass) values('$boleta','$nombre','$paterno','$materno',$semestre,'$direccion','$email','$pass');");
    //return mysqli_query($conexion, "call insertAlumno('$boleta','$nombre','$paterno','$materno',$semestre,'$direccion','$email','$pass');");
}