<?php

include("Basedatos.php");

if(isset($_POST["botonRegistro"])){

    $nombre=$_POST["nombre"];
    $email=$_POST["email"];
    $apellido=$_POST["apellido"];
    $cedula=$_POST["cedula"];
    $edad=$_POST["edad"];
    $direccion=$_POST["direccion"];
    $telefono=$_POST["telefono"];

    $operacion=new BaseDatos();

    $consulta="INSERT INTO usuarios(edad) VALUES ('$edad')";

    $operacion ->alterarBaseDatos($consulta);
    
    
}

?>