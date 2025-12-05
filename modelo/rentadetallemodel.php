<?php

        include "../modelo/conexion.php";

        function buscardetalleRentas($id_renta){
            $conexion = conecta();

            $busqueda = "select id_rentadetalles, id_articulo, fecha_limite, id_empretorno, fecha_entregado from renta_detalles where id_renta = :id_renta";


            $stmt = $conexion->prepare($busqueda);
            $stmt->execute([":id_renta" => $id_renta]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

?>