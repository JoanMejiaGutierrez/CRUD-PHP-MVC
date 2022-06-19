<?php
    require_once "config/config.php";
    require_once "config/routes.php";
    require_once "config/database.php";
    require_once "controllers/Vehiculos.php";

    //$control = new Vehiculos_Controllers();
    //$control-> index();

    if (isset($_GET['c'])){//nos aseguramos que haya un parametro de controlador
        $controlador = cargarControlador($_GET['c']);//carga controlador indicado correctamente o si no el contrlador Vehiculos
        if (isset($_GET['a'])){//nos aseguramos que hata un parametro de accion
            if (isset($_GET['id'])){
                cargarAccion($controlador, $_GET['a'], $_GET['id']);
            }
            else{
                cargarAccion($controlador, $_GET['a']);//detecta y valida la accion indicada del controlador indicado
            }
        }
        else{
            cargarAccion($controlador, ACCION_PRINCIPAL);//detecta y valida la accion index del controlador indicado
        }
    }else{
        //Si no hay controlador ni accion se cargan los por defecto
        $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);

        $nombredelmetodo = ACCION_PRINCIPAL;//nombre del metodo sin los "()"
        $controlador->$nombredelmetodo();//manda a llamar al metodo del controlador
    }
?>