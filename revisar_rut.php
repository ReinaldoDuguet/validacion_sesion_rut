<?php

if (isset($_POST["submit"])) {
    if(empty($_POST["rut"])){ 
        header("Location: contacto.php");
    }else{
        if (strlen($_POST["rut"])<9 or strlen($_POST["rut"])>10) { 
            header("Location: contacto.php");
        }else{
            $rut = $_POST["rut"];
            $con = new mysqli("ubicacion_bd","nombre_usuario","password","base_datos");
            
            $sql = "SELECT * FROM usuarios WHERE rut like '$rut'"; //usuarios corresponde al nombre de la tabla contenida en base_datos
            $res = $con->query($sql);

            if ($fila = $res->fetch_assoc()) {
                $_SESSION["rut"]=$rut;
                header("Location: form_rut.php");
            }else{
                header("location: contacto.php");
            }


        }

    }
}
?>