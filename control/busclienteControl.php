<?php

        include "../modelo/clientesmodel.php";

        function tablaClientes(){
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                return buscarClientes();
            }

            $id_cliente = isset($_POST['id_cliente']) ? ($_POST['id_cliente']) : null;
            $nombre = isset($_POST['nombre']) ? ($_POST['nombre']) : null;
            $apellidos = isset($_POST['apellidos']) ? ($_POST['apellidos']) : null;
            return buscarClientes($id_cliente,$nombre,$apellidos);
        }

?>

