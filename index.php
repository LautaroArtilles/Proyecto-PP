<?php
    //Conectamos con el servidor

    $conectar = mysqli_connect("localhost:1234", "root", "123456", "formulario");
    mysqli_set_charset($conectar,"utf8");

    //Verificamos la conexión

    if(!$conectar){
        echo"Error al conectar con el servidor";
    }

    //Recuperar las variables

        if($_POST){
            $nombre = $_POST["nombre"];
            $correo = $_POST["correo"];
            $telefono = $_POST["telefono"];
            $Mensaje = $_POST["mensaje"];
            

            $insertar = "INSERT INTO datos(Nombre, Correo, Telefono, Mensaje) VALUES ('$nombre','$correo','$telefono','$Mensaje')";

    $resultado = mysqli_query($conectar,$insertar);
            echo"<div style='font-style: italic;'><h1>El formulario se ha enviado correctamente</h1><h2>Volviendo...</h2></div>";
            echo"<script>
            setTimeout(function(){window.history.back()},2500);</script>";
            
        }
?>