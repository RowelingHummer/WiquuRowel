<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
$nombreUsuario = "";
$idPagina = 0;
$urlImagenPerfil = "./imagenes/Avatar.jpg";
?>
<html>
    <title>Wiquu</title>
          <meta charset="UTF-8">
        <title>ProShare ¡La comunidad al servicio!</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/stylesWEB.css">
        <script src="js/header.js"></script>
        <script src="js/modals.js"></script>
        <script src="js/navCategorias.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
        body,h1 {font-family: "Raleway", sans-serif}
        body, html {height: 100%}
        .bgimg {
            background-image: url('./imagenes/fondo.jpg');
            min-height: 100%;
            background-position: center;
            background-size: cover;
            filter:grayscale(20%)
        }
    </style>
    <body>

        <!-- Navbar (sit on top) -->
        <?php
        include_once './estructura/elementos/header.php';
        include_once './estructura/elementos/navInferiorMobile.php';
        include_once './estructura/elementos/modalLogin.php';
        ?>
        <header class="bgimg rowel-display-container " id="home">
            <div class="rowel-display-middle rowel-wiquu-am  rowel-center" style="padding:48px">
                <form action="/action_page.php" class="rowel-margin">
                <span class="rowel-jumbo rowel-hide-small rowel-text-wiquu-az"><img class="logo-wiquu" src="./imagenes/wiqüu.png" alt="Avatar"></span><br>
                <span class="rowel-xxlarge rowel-hide-large rowel-hide-medium"><img class="logo-wiquu" src="./imagenes/wiqüu.png" alt="Avatar"></span><br>
                <span class="rowel-large">La comunidad al servicio ü</span><br><br>
                <span><input class="rowel-input rowel-border rowel-wiquu-g-l4 rowel-padding-16" name="" type="text" placeholder="¿Qué servicio necesitas?" style="width:100%"></span><br>
                <a href="#about" class="rowel-button rowel-wiquu-v rowel-padding-large rowel-large rowel-margin-top  rowel-hover-opacity" style="width:80%">Buscalo!</a></p>
                </form>
            </div> 
            <div class="rowel-display-bottomleft rowel-text-white rowel-large" style="padding:24px 48px">
                <i class="fa fa-facebook-official rowel-hover-opacity"></i>
                <i class="fa fa-instagram rowel-hover-opacity"></i>
                <i class="fa fa-snapchat rowel-hover-opacity"></i>
                <i class="fa fa-pinterest-p rowel-hover-opacity"></i>
                <i class="fa fa-twitter rowel-hover-opacity"></i>
                <i class="fa fa-linkedin rowel-hover-opacity"></i>
            </div>
            <div class="rowel-display-bottomleft rowel-padding-large rowel-text-white">
                Powered by <a href="http://rowel.co" target="_blank">Rowel Ingeniería</a>
            </div>
        </header>

    </body>
</html>

