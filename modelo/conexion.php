<?php

        function conecta(){
                $conexion = new PDO("mysql:host=localhost:3307;dbname=proyecto","root","");
                return $conexion;
        }

?>