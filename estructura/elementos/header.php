<?php
include './clases/header.php';


$cabecera = new header($nombreUsuario, $idPagina, $urlImagenPerfil);
echo $cabecera->generarHeader();
