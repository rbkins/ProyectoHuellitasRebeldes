<?php

class Contenido{
    public function mostrar_archivo(){
        $pagina="";
        $url=isset($_GET["url"])? $_GET["url"]:null;
        @$url=explode('/',$url);

        if($url[0]==null){
            $pagina="ProyectoHuellitasRebeldes";
        }elseif($url[0]=="Inicio"){
            $pagina="view/admin/Inicio/inicio.php";
        }elseif($url[0]=="Servicios"){
            $pagina="view/admin/Servicios/servicio.php";
        }elseif($url[0]=="Productos"){
            $pagina="view/admin/Productos/producto.php";
        }elseif($url[0]=="Equipo"){
            $pagina="view/admin/Equipo/equipo.php";
        }elseif($url[0]=="Contacto"){
            $pagina="view/admin/Contacto/contacto.php";
        }elseif($url[0]=="Cerrar Sesion"){
            $pagina="view/admin/Cerrar_Sesion/cerrar_sesion.php";
        }else{
            $pagina="e404.php";

        }
        return $pagina;
    }
}