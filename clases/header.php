<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of header
 *
 * @author Rowel
 */
class header {

    private $nombreUsuario;
    private $idPagina;
    private $urlImagenPerfil;

    //put your code here
    private function setNombreUsuario($nombreUsuario) {
        $this->nombreUsuario = $nombreUsuario;
    }

    private function setIdPagina($idPagina) {
        $this->idPagina = $idPagina;
    }

    private function setUrlImagenPerfil($urlImagenPerfil) {
        $this->urlImagenPerfil = $urlImagenPerfil;
    }

    public function __construct($nombreUsuario = "", $idPagina = 0, $urlImagenPerfil = "") {
        $this->setIdPagina($idPagina);
        $this->setNombreUsuario($nombreUsuario);
        $this->setUrlImagenPerfil($urlImagenPerfil);
    }

    public function generarHeader() {
        $e = $this->generarHeaderWeb();
        $e .= $this->generarHeaderMovil();
        return $e;
    }

    private function generarHeaderWeb() {
        $e = '<nav class="rowel-top rowel-wiquu-am rowel-hide-small "><div class=" rowel-row rowel-bar rowel-padding">';
        $e .= $this->generacionColumnasWeb();
        $e .= '</div></nav>';
        return $e;
    }

    private function generacionColumnasWeb() {
        $e = '<div class="rowel-col l4 m12 rowel-bar-item rowel-center">' . $this->generarLogo() . '</div>';
        $e .= '<div class="rowel-col l6 m9 rowel-hide-small ">' . $this->verificarIdPagina() . '</div>';
        $e .= '<div class="rowel-col l2 m3 ">' . $this->verificarSesionUsuario("Web") . '</div>';
        return $e;
    }

    private function generarHeaderMovil() {
        $e = '<nav class="rowel-top rowel-hide-large rowel-hide-medium "><div class="rowel-row rowel-wiquu-am rowel-large rowel-text-wiquu-az">';
        $e .= $this->generacionColumnasMovil();
        $e .= '</div></nav>';
        return $e;
    }

    private function generacionColumnasMovil() {
        $e = '<div class="rowel-col s2 rowel-center rowel-hover-wiquu-az rowel-padding-16">' . $this->verificarSesionUsuario("Movil") . '</div>';
        $e .= '<div class="rowel-col s8 rowel-center rowel-hover-wiquu-az rowel-padding-16">' . $this->generarLogo() . '</div>';
        $e .= '<div class="rowel-col s2 rowel-center rowel-hover-wiquu-az rowel-padding-16">' . '</div>';
        return $e;
    }

    private function generarLogo() {
        $e = '<div class="" >
                <a href="./home.php">
                    <img class="icono-wiquu" src="./imagenes/wiqüu.png" alt="Avatar">
                </a>
            </div>';
        return $e;
    }

    private function generarImagenPerfil() {
        $e = '<img src="' . $this->urlImagenPerfil . '" class="rowel-circle" style="height:25px;width:25px" alt="Avatar">';
        return $e;
    }

    private function verificarIdPagina() {
        if ($this->idPagina == 0) {
            $e = '<div style="width:100%"></div>';
        } else {
            $e = $this->generarBarraBusqueda();
        }
        return $e;
    }

    private function generarBarraBusqueda() {
        $e = '<button class="rowel-bar-item rowel-button  rowel-light-gray rowel-mobile rowel-hover-wiquu-az"><span class="glyphicon glyphicon-search"></span></button>';
        $e .= '<input class="rowel-bar-item rowel-input  rowel-white rowel-mobile  rowel-search" type="text" placeholder="¿En qué puedo ayudarte?" >';
        $e .= '<a class=" rowel-bar-item  rowel-hover-wiquu-az rowel-text-wiquu-az" href="#"><i class="fa fa-calendar"></i> </a>';
        $e .= '<a class=" rowel-bar-item  rowel-hover-wiquu-az rowel-text-wiquu-az" href="#"><i class="fa fa-heart"></i> </a>';
        $e .= '<a class=" rowel-bar-item  rowel-hover-wiquu-az rowel-text-wiquu-az" href="#"><i class="fa fa-shopping-cart"></i> </a>';
        $e .= '<a class=" rowel-bar-item  rowel-hover-wiquu-az rowel-text-wiquu-az" href="#"><i class="fa fa-ticket"></i> </a>';
        return $e;
    }

    private function verificarSesionUsuario($dispositivo) {
        $nombreUsuario = $this->nombreUsuario;
        if ($nombreUsuario == "") {
            $e = '<div class="rowel-right  rowel-hover-wiquu-az rowel-text-wiquu-az"><a onclick="openModalLogin()"><span class="glyphicon glyphicon-user"></span>Iniciar Sesión</a></div>';
        } else {
            $e = $this->generarBotonLogin($dispositivo, $nombreUsuario);
        }
        return $e;
    }

    private function generarBotonLogin($dispositivo, $nombreUsuario) {
        switch ($dispositivo) {
            case "Web":
                $e = '<div class="rowel-dropdown-click rowel-right">';
                $e .= '<spam class="rowel-hide-small "> ' . $nombreUsuario . ' </spam>';
                $e .= '<button class="rowel-button" onclick="myFunction(' . "'avatar'" . ')">';
                $e .= $this->generarImagenPerfil();
                $e .= '<i class="fa fa-caret-down"></i></button>';
                $e .= '<div id="avatar" class="rowel-dropdown-content rowel-bar-block rowel-card">';
                $e .= '<a href="./perfil.php" class="rowel-bar-item rowel-button">Mi perfil</a>';
                $e .= '<a href="#" class="rowel-bar-item rowel-button">Link 2</a>';
                $e .= '<a href="#" class="rowel-bar-item rowel-button">Link 3</a>';
                $e .= '</div>';
                break;
            case "Movil":
                $e = '<div><a href="./perfil.php"><p class="rowel-hide-small">Hola, ' . $nombreUsuario . '</p> ' . $this->generarImagenPerfil() . '</a></div>';
                break;
        }
        return $e;
    }

}
?>
