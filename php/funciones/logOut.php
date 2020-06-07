<?php
session_start();

unset($_SESSION['usuario']);

session_destroy();

header("location: http://localhost/bibliotescom/index.php");