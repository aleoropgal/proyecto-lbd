<?php

        include "../modelo/conexion.php";

        function buscarRentas($id_cliente = null, $id_renta = null, $id_emprenta = null){
            $conexion = conecta();
            $param = [];

            $busqueda = "select r.id_renta, r.id_cliente, p.nombre, p.apellidos, r.id_emprenta, r.fecha_registro from renta r inner join cliente c on r.id_cliente = c.id_cliente inner join persona p on c.id_persona = p.id_persona where 1 = 1";

            if (!empty($id_cliente)) {
                $busqueda .= " and r.id_cliente = :id_cliente";
                $param[':id_cliente'] = $id_cliente;
            }

           if (!empty($id_renta)) {
                $busqueda .= " and id_renta = :id_renta";
                $param[':id_renta'] = $id_renta;
            }

            if (!empty($id_emprenta)) {
                $busqueda .= " and r.id_emprenta = :id_emprenta";
                $param[':id_emprenta'] = $id_emprenta;
            }

            $stmt = $conexion->prepare($busqueda);
            $stmt->execute($param);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

?>
