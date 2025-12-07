<?php

        function conecta(){
                $conexion = new PDO("mysql:host=172.16.111.67;dbname=proyecto","alejandra","St4rL0stSKZ8!");
                return $conexion;
        }

?>
