<?php
/** LISTA BLANCA */
/** Controla paginas mediante GET */
if(isset($_GET['accion'])){
    if($_GET['accion'] == 'cerrarSesion'){
        loginController::cerrarSesion();
        
    }else if($_GET['accion'] == 'eliminar'){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        loginController::eliminarRegistro($id);
    }
}else if(isset($_GET['pagina'])){
    if($_GET['pagina'] == 'inicio' ||
        $_GET['pagina'] == 'registros' ||
        $_GET['pagina'] == 'login' ||
        $_GET['pagina'] == 'registro' ||
        $_GET['pagina'] == 'actualizar' ||
        $_GET['pagina'] == 'resultados' ||
        $_GET['pagina'] == 'about' ||
        $_GET['pagina'] == 'service' ||
        $_GET['pagina'] == 'service-single' ||
        $_GET['pagina'] == 'story' ||
        $_GET['pagina'] == 'event' ||
        $_GET['pagina'] == 'gallery' ||
        $_GET['pagina'] == 'error' ||
        $_GET['pagina'] == 'blog' ||
        $_GET['pagina'] == 'blog-single' ||
        $_GET['pagina'] == 'contact'){
        include "paginas/".$_GET["pagina"].".php";
    }else{
        include "paginas/error.php";
    }
}else{
    #Modularizar
    #Se estandariza que sea la pagina principal
    include "paginas/inicio.php";
}