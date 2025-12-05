<?php

        include "../modelo/articulosmodel.php";

        function tablaArticulos(){
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                return buscarArticulos();
            }

            $id_individual = isset($_POST['id_individual']) ? ($_POST['id_individual']) : null;
            $nombre = isset($_POST['nombre']) ? ($_POST['nombre']) : null;
            $marca = isset($_POST['marca']) ? ($_POST['marca']) : null;
            return buscarArticulos($id_individual,$nombre,$marca);
        }

?>