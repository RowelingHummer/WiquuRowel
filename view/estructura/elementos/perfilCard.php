<?php
include './enlaces.php';
include $urlClases.'card.php';

$perfilCard = new perfilCard("white", "round", "Margarita", "./imagenes/Avatar.jpg", "Abogada", "Bogota, CO", "Mayo 25, 1970");
$perfilCard->mostrarPerfilCard();
