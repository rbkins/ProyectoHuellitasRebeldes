<?php

//Encargado de manejar rutas del sitio.

class contenido{

public function mostrar_archivo(){

    $pagina ="";
    $url = isset($_GET["url"])? $_GET["url"]: null;
    $url = explode('/', $url);
    if($url[0]==null){
        $pagina = "view/inicio.php";
    }
    return $pagina;

}


}


?>