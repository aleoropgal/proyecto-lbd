<?php

        include "../modelo/conexion.php";

        function buscarClientes($id_cliente = null, $nombre = null, $apellidos = null){
            $conexion = conecta();
            $param = [];

            $busqueda = "select id_cliente, nombre, apellidos, fecha_nacimiento, telefono, email, direccion from cliente inner join persona USING (id_persona) where 1=1";

            if (!empty($id_cliente)) {
                $busqueda .= " and id_cliente = :id_cliente";
                $param[':id_cliente'] = $id_cliente;
            }

            if (!empty($nombre)) {
                $busqueda .= " AND nombre LIKE :nombre";
                $param[':nombre'] = "%$nombre%";
            }

            if (!empty($apellidos)) {
                $busqueda .= " AND apellidos LIKE :apellidos";
                $param[':apellidos'] = "%$apellidos%";
            }

            $stmt = $conexion->prepare($busqueda);
            $stmt->execute($param);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

?>