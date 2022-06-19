<?php
    class VehiculosController{


        public function __construct(){
            require_once "models/vehiculosModel.php";
        }

        public function index(){
            $vehiculos = new Vehiculo_model();
            $data["titulo"] = "Vehiculos";
            $data["vehiculos"] =  $vehiculos->get_vehiculos();

            require_once "views/vehiculos/vehiculos.php";
        }


        public function agregar_vehiculo(){
            $data["titulo"] = "Vehiculos";
            require_once "views/vehiculos/agregar_vehiculo.php";
        }

        public function guardarVehiculo(){
            //Se puede agregar para filtrar la inyeccion de codigo(mysql_rail_escape algo asi)
            $placa = $_POST['txtPlaca'];
            $marca = $_POST['txtMarca'];
            $modelo = $_POST['txtModelo'];
            $anio = $_POST['txtAnio'];
            $color = $_POST['txtColor'];
            $vehiculos = new Vehiculo_model();
            $vehiculos->InsertarVehiculo($placa, $marca, $modelo, $anio, $color);

            $data["titulo"] = "Vehiculos";
            $this->index();
        }



        public function editarVehiculo($id){
            $data["titulo"] = "Vehiculos";
            $miVehiculo = new Vehiculo_model;
            $data["vehiculo"] = $miVehiculo->get_vehiculo($id);
            require_once "views/vehiculos/editar_vehiculo.php";
        }


        public function editar_vehiculo($id){
            $placa = $_POST['txtPlaca'];
            $marca = $_POST['txtMarca'];
            $modelo = $_POST['txtModelo'];
            $anio = $_POST['txtAnio'];
            $color = $_POST['txtColor'];

            $miVehiculo = new Vehiculo_model;
            $miVehiculo->editarVehiculo($id, $placa, $marca, $modelo, $anio, $color);
            $this->index();
        }


        public function eliminar_vehiculo($id){
            $miVehiculo = new Vehiculo_model;
            $miVehiculo->EliminarVehiculo($id);
            $this->index();
        }
    }
?>