<?php
include './enlaces.php';
include $urlClases.'header.php';


$cabecera = new header($nombreUsuario, $idPagina, $urlImagenPerfil);
echo $cabecera->generarHeader();
