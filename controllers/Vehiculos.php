<?php

class Vehiculoscontroller {

    public function __construct() {
        require_once "models/VehiculosModel.php";
    }
    
    public function index() {
        require_once "models/VehiculosModel.php";

        $vehiculos = new Vehiculos_model();
        $data["titulo"] = "Vehiculos";
        $data["vehiculos"] = $vehiculos->get_vehiculos();

        require_once "views/vehiculos/vehiculos.php";
    }

    public function nuevo() {

        $data["titulo"] = "Vehiculos";
        require_once "views/vehiculos/vehiculos_nuevo.php";

    }

    public function guarda() {

        $i = 0;

        if (!empty($_POST['placa'])) {
            $placa = $_POST['placa'];
        } else {           
            $i++;
        }

        if (!empty($_POST['marca']) && ctype_alpha($_POST['marca'])) {
            $marca = $_POST['marca'];
        } else {           
            $i++;
        }
       
         if (!empty($_POST['modelo'])) {
            $modelo = $_POST['modelo'];
        } else {            
            $i++;
        }

        if (!empty($_POST['anio']) && is_numeric($_POST['anio'])) {
            $anio = $_POST['anio'];
        } else {          
            $i++;
        }

        if (!empty($_POST['color']) && ctype_alpha($_POST['color'])) {
            $color = $_POST['color'];
        } else {           
            $i++;
        }

        $vehiculos = new Vehiculos_model();

        if ($i < 1) {
            $vehiculos->insertar($placa, $marca, $modelo, $anio, $color);
        } else {
            echo "<h3 class='error'>Campo en blanco o Datos incorrectos, Ingrese los datos correctamente</h3>";
        }
       

        $data["titulo"] = "Vehiculos";
        $this->index();

    }

    public function modificar($id) {

        $vehiculos = new Vehiculos_model();        

        $data["id"] = $id;    
        $data["vehiculos"] = $vehiculos->get_vehiculo($id);     
        $data["titulo"] = "Vehiculos";
        require_once "views/vehiculos/vehiculos_modifica.php";

    }

    public function actualizar() { 

        $id = $_POST['id'];
       
        $i = 0;

        if (!empty($_POST['placa'])) {
            $placa = $_POST['placa'];
        } else {           
            $i++;
        }

        if (!empty($_POST['marca']) && ctype_alpha($_POST['marca'])) {
            $marca = $_POST['marca'];
        } else {           
            $i++;
        }
       
         if (!empty($_POST['modelo'])) {
            $modelo = $_POST['modelo'];
        } else {            
            $i++;
        }

        if (!empty($_POST['anio']) && is_numeric($_POST['anio'])) {
            $anio = $_POST['anio'];
        } else {          
            $i++;
        }

        if (!empty($_POST['color']) && ctype_alpha($_POST['color'])) {
            $color = $_POST['color'];
        } else {           
            $i++;
        }

        $vehiculos = new Vehiculos_model();

        if ($i < 1) {
            $vehiculos->modificar($id, $placa, $marca, $modelo, $anio, $color);
        } else {
            echo "<h3 class='error'>Campo en blanco o Datos incorrectos, Ingrese los datos correctamente</h3>";
        }      

        $data["titulo"] = "Vehiculos";
        $this->index();

    }

    public function eliminar($id) {

        $vehiculos = new Vehiculos_model();
        $vehiculos->eliminar($id);

        $data["titulo"] = "Vehiculos";
        $this->index();

    }

}

?>