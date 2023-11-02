<?php
    namespace TrialsCollection;
    use TrialsCollection\controladores\ControladorTrials;
    
    //Autocargar las clases --------------------------
    spl_autoload_register(function ($class) {
        //echo substr($class, strpos($class,"\\")+1);
        $ruta = substr($class, strpos($class,"\\")+1);
        $ruta = str_replace("\\", "/", $ruta);
        include_once "./" . $ruta . ".php"; 
    });

    if (isset($_REQUEST)) {
        //Tratamiento de botones, forms, ...
        if (isset($_REQUEST["accion"])) {
            
           if(strcmp($_REQUEST["accion"],"mostrarTodo")) {
            ControladorTrials::mostrarTodos();
           }



        } else {
            //Mostrar inicio
            ControladorTrials::mostrarInicio();
        }
    }




?>