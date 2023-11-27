<?php

class ControladorBlog {

    #Mostrar contenido del blog
    static public function ctrMostrarBlog() {
        
        $tabla = "blog";
        $respuesta = ModeloBlog::mdlMostrarBlog($tabla);
        return $respuesta;
    }

}