<?php
include "../modelo/conexion.php";

$id_detalle = $_POST['id_detalle'];
$id_empretorno = $_POST['id_empretorno'];
$fecha_entregado = $_POST['fecha_entregado'];

$conexion = conecta();

$stmt = $conexion->prepare("update renta_detalles set idempleado_retorno = :empleado, fecha_entregado = :fecha where id_rentadetalles = :id_detalle
");

$stmt->execute([
    ":empleado"=> $id_empretorno,
    ":fecha" => $fecha_entregado,
    ":id_detalle" => $id_detalle
]);

?>

<html>
        <head>
                <title> Renta de Equipo Médico </title>
                <link rel="stylesheet" href="../style.css">
        </head>
        <body>
                <div class="formulario">
                <br><h1> Registrar devolución </h1>

                <p> Devolución registrada con éxito </p>
                <div style="text-align: center;">
                        <a href = "../../proyecto/vista/rentas.php" class="btn">
                                <button class="btn-style"> Ir a Rentas </button>
                        </a>
                </div>
                </div>


        </body>
</html>

