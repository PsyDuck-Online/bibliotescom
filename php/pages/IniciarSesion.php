<?php
session_start();
if (isset($_SESSION['usuario'])) {
    echo "<script>alert('Usuario ya adentro');</script>";
    echo "<script>window.history.back();</script>";
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>Iniciar - Biblioteca Virtual</title>
    <link rel="stylesheet" type="text/css" href="../../css/CSSIniciarS.css">
</head>

<link rel="stylesheet" type="text/css" href="../../css/CSSIniciarS.css">

<body>
    <div style=" background-color: #F1F1F1; padding: 10px;"></div>

    <div>
        <img src="../../img/ipnLogo.png" class="img1">
        <img src="../../img/escom.png" class="img2">
    </div>

    <div class="txtdiv">
        <form class="formul" action="../funciones/logIn.php" method="post" id="iniciarSesion">
            <input type="text" placeholder="Boleta" name="boleta">
            </br>
            <input type="password" placeholder="Password" name="pass">
            </br>
            <input type="submit" name="login" id="submit">
        </form>
    </div>
    <div class="footer">
        <p>&copy; Web awebo - Biblioteca Virtual</p>
    </div>
</body>

</html>