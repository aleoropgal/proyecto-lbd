<?php

        include "../modelo/rentasmodel.php";

        function tablaRentas(){
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                return buscarRentas();
            }

            $id_cliente = isset($_POST['id_cliente']) ? ($_POST['id_cliente']) : null;
            $id_renta = isset($_POST['id_renta']) ? ($_POST['id_renta']) : null;
            $id_articulo = isset($_POST['id_articulo']) ? ($_POST['id_articulo']) : null;
            return buscarRentas($id_cliente,$id_renta,$id_articulo);
        }

?>