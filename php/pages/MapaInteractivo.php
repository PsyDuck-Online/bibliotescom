<!DOCTYPE HTML>
<html>
<!--lang="en" este atributo seria si nosotros realizamos pagina en ingles-->

<head>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>Mapa Interactivo</title>
    <link rel="stylesheet" type="text/css" href="../../css/CSSMapa.css">
    <script src="https://kit.fontawesome.com/a2c135308a.js" crossorigin="anonymous"></script>
    <script src="../../js/buscarSecciones.js"></script>
</head>

<body>

    <div style=" background-color: #F1F1F1; padding: 10px;"></div>
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
                        <li><a href="#">Iniciar</a></li>
                        <li><a href="#">Registrarse</a></li>
                        <li><a href="#">Cerrar Sesion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <div class="Imgdiv">
        <map name="mapa">
            <area shape="rect" coords="128,36,214,162" href="#" alt="Seccion Roja" id="roja">
            <area shape="rect" coords="220,36,328,162" href="#" alt="Seccion Azul" id="azul">
            <area shape="rect" coords="334,36,440,162" href="#" alt="Seccion Verde" id="verde">
            <area shape="rect" coords="130,200,215,300" href="#" alt="Seccion Amarilla" id="amarilla">
            <area shape="rect" coords="217,200,285,300" href="#" alt="Seccion Rosa" id="rosa">
            <area shape="rect" coords="370,369,443,475" href="#" alt="Seccion morada" id="morada">
            <area shape="rect" coords="446,369,511,475" href="#" alt="Seccion Marron" id="marron">
        </map>
        <img src="../../img/Mapa.png" width="550" class="imgn" usemap="#mapa">
    </div>

    <div class="div2">
        <div class="div2-libros">
            <h2>Libros</h2>

            <input type="text" id="buscar" class="buscador sombra" placeholder="Buscar libro por titulo">

            <p class="total-libros"><span>2</span> Libros</p>

            <div class="contenedor-tabla">
                <table class="listado-libros">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Autor</th>
                            <th>Editorial</th>
                            <th>Idioma</th>
                            <th>Año</th>
                            <th>Edicion</th>
                            <th>Turno</th>
                            <th>Consultar Disponibilidad</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Programacion en C</td>
                            <td>Luis Joyanes Aguilar, Ingancio Zahonero Martines</td>
                            <td>Mc Graw Hill</td>
                            <td>Español</td>
                            <td>2005</td>
                            <td>2</td>
                            <td>Matutino</td>
                            <td>
                                <button class="btn-disponibilidad">
                                    <i class="fas fa-book" id="ddd"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div class="footer">
        <p>&copy; Web awebo - Biblioteca Virtual</p>
    </div>

</body>

</html>