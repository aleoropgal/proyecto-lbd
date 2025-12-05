<?php

        include "../modelo/conexion.php";

        $id_cliente = htmlspecialchars($_POST['id_cliente']);
        $id_empleado = htmlspecialchars($_POST['id_empleado']);
        $num = intval($_POST['num']);
        $id_articulo = $_POST['id_articulo'];
        $fecha_limite = $_POST['fecha_limite'];
        $conexion = conecta();
        $conexion->beginTransaction();
        $stmt = $conexion->prepare("insert into renta (id_cliente, id_emprenta) values (:cliente, :empleado)");
        $stmt->bindParam(":cliente",$id_cliente);
        $stmt->bindParam(":empleado",$id_empleado);
        $stmt->execute();


        $id_renta = $conexion->LastInsertId();

        $stmt2 = $conexion->prepare("insert into renta_detalles (id_renta, id_articulo, fecha_limite, idempleado_retorno, fecha_entregado) values (:id_renta, :id_articulo, :fecha_limite,NULL,NULL)");
        
         for ($i = 0; $i < $num; $i++) {
            $stmt2->execute([
                ':id_renta' => $id_renta,
                ':id_articulo' => $id_articulo[$i],
                ':fecha_limite' => $fecha_limite[$i]
            ]);
        }

        $id_recuerdo = $conexion->LastInsertId();

        $conexion->commit();

        //echo "Registro almacenado con éxito en la base de datos"; ?>

<html>
        <head>
                <title> Renta de Equipo Médico </title>
                <link rel="stylesheet" href="../style.css">
        </head>
        <body>
                <div class="formulario">
                <br><h1> Renta </h1>
                <h2> Nueva Renta </h2>

                <p> Renta agregada con éxito </p>
                <p> Su <b>ID</b> de renta es <b><?php echo "$id_renta"; ?></b> </p>
                <div style="text-align: center;">
                        <a href = "../../proyecto/vista/rentas.php" class="btn">
                                <button class="btn-style"> Atrás </button>
                        </a>
                </div>
                </div>


        </body>
</html>