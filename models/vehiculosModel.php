<?php
class Vehiculo_model{
    private $db;
    private $vehiculos;

    public function __construct(){
        $this->db = Conectar::conexion();//llamar al metodo estatico de la clase Conectar
        $this->vehiculos = array();//crear arreglo
    }

    public function get_vehiculos(){//devueve al arreglo con los registros de la bd
        $sql = "select * from vehiculo";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()){
            $this->vehiculos[] = $row;
        }
        return $this->vehiculos;
    }


    public function get_vehiculo($id){//devueve al arreglo con los registros de la bd
        $sql = "select * from vehiculo WHERE id=$id";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;
        print_r($row);
    }



    public function InsertarVehiculo($placa, $marca, $modelo, $anio, $color){
        $sql = "insert into vehiculo (placa, marca, modelo, anio, color) values ('$placa', '$marca', '$modelo', '$anio', '$color')";
        $resultado = $this->db->query($sql);
    }
    

    public function EditarVehiculo($id, $placa, $marca, $modelo, $anio, $color){
        $sql = "UPDATE vehiculo SET placa='$placa', marca='$marca', modelo='$modelo', anio='$anio', color='$color' WHERE id=$id";
        $resultado = $this->db->query($sql);
    }

    public function EliminarVehiculo($id){
        $sql = "DELETE FROM vehiculo WHERE id=$id LIMIT 1";
        $resultado = $this->db->query($sql);
    }


}

?>