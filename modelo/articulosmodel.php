<?php

        include "../modelo/conexion.php";

        function buscarArticulos($id_individual = null, $nombre = null, $marca = null){
            $conexion = conecta();
            $param = [];

            $busqueda = "select au.id_individual, a.nombre, a.modelo, m.nombre as marca, a.descripcion, au.cpd from articulo a inner join articulo_unidad au on a.id_articulo = au.id_articulo inner join marca m on au.id_marca=m.id_marca where 1=1";

            if (!empty($id_individual)) {
                $busqueda .= " and au.id_individual = :id_individual";
                $param[':id_individual'] = $id_individual;
            }

            if (!empty($nombre)) {
                $busqueda .= " and a.nombre LIKE :nombre";
                $param[':nombre'] = "%$nombre%";
            }

            if (!empty($marca)) {
                $busqueda .= " AND m.nombre LIKE :marca";
                $param[':marca'] = "%$marca%";
            }

            $stmt = $conexion->prepare($busqueda);
            $stmt->execute($param);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
?>