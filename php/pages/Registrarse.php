<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>Registrarse - Biblioteca Virtual</title>
    <link rel="stylesheet" type="text/css" href="../../css/CSSRegistrarse.css">

    <script src="js/validar.js"></script>

</head>

<link rel="stylesheet" type="text/css" href="../../css/CSSRegistrarse.css">

<body>

    <?php $_POST = array(); ?>

    <div class="bar"></div>

    <div class="Logos">
        <img src="../../img/ipnLogo.png" class="img1">
        <img src="../../img/escom.png" class="img2">
    </div>

    <div class="txtdiv">
        <form class="formul" action="../funciones/registrarAlumno.php" method="post"
            onsubmit="return validarRegistro();">
            <input type="text" id="boleta" placeholder="Boleta" name="boleta" required></br>
            <input type="text" id="nombre" placeholder="Nombre" name="nombre" required></br>
            <input type="text" id="paterno" placeholder="Apellido Paterno" name="paterno" required><br />
            <input type="text" id="materno" placeholder="Apellido Materno" name="materno" required><br />
            <input type="number" min="1" id="semestre" placeholder="Semestre" name="semestre" required><br />
            <input type="text" id="direccion" placeholder="Dirección" name="direccion" required><br />
            <input type="email" id="email" placeholder="Correo" name="email" required><br />
            <input type="password" id="pass" placeholder="Password" name="pass" required></br>
            <input type="password" id="pass2" placeholder="Reingresa Contraseña" required></br>
            <input type="submit" value="Validar" name="registrar" id="submit">
            <div id="error"></div>
    </div>
    </form>


    <div class="footer">
        <p>&copy; BIBLIOTESCOM</p>
    </div>

</body>

</html>