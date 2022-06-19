<?php

    include_once "config.php";
    function cargarControlador($controlador){//detecta si existe el controlador o si no devuelve el default
        $nombreControlador = ucwords(strtolower($controlador)) . "Controller";//devuelve el nombre del controlador
        $nombreDelArchivoControlador = 'controllers/'. ucwords(strtolower($controlador)).'.php';//devuelve el nombre del archivo donde se encuentra el controlador

        if (!is_file($nombreDelArchivoControlador)){//en caso de que el archivo no esxista
            $nombreDelArchivoControlador = 'controllers/'.CONTROLADOR_PRINCIPAL. '.php';//colocar nombre del archivo controlador default
            $nombreControlador = CONTROLADOR_PRINCIPAL."Controller";//colorcar el nombre del controlador default
        }
        require_once $nombreDelArchivoControlador;//carga el archivo del controlador(sea uno inidicado o default)
        $control = new $nombreControlador();//creamos un objeto controlador para empezar a usar el controlador
        return $control;//retorna el objeto controlador
    }


    function cargarAccion($controlador, $accion, $id = null){
        if (isset($accion) && method_exists($controlador, $accion)){
            if ($id == null){
                $controlador->$accion();//manda a llamar a la accion inidicada de controlador indicado
            }
            else{
                $controlador->$accion($id);
            }
        }
        else{
            $nombreDelMetodo = ACCION_PRINCIPAL;
            $controlador->$nombreDelMetodo();//manda a llamar el index del controlador indicado
        }
    }
?>