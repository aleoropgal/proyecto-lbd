<?php
    include "../modelo/rentadetallemodel.php";

    $id_renta = $_GET['id'];

    $rentas = buscardetalleRentas($id_renta);
?>

<html>
<head>
    <title>Renta de Equipo Médico</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<div class="formulario">

    <h1 class="section-title">Renta Detallada</h1>

    <table class="tabla-medica">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Articulo</th>
                <th>Fecha limite</th>
                <th>ID empleado que recibió</th>
                <th>Fecha entregado</th>
                <th>Devolución</th>
            </tr>
        </thead>

        <tbody>
        <?php if (!empty($rentas)): ?>
            <?php foreach ($rentas as $renta): ?>
                <tr>
                    <td><?= $renta['id_rentadetalles'] ?></td>
                    <td><?= $renta['id_articulo'] ?></td>
                    <td><?= $renta['fecha_limite']?></td>
                    <td><?= $renta['idempleado_retorno'] ?></td>
                    <td><?= $renta['fecha_entregado'] ?></td>
                    <td>
                    <a href="retorno.php?id_detalle=<?= $renta['id_rentadetalles'] ?>">
                        Registrar Devolución
                    </a>
                </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="6">No se encontraron rentas</td></tr>
        <?php endif; ?>
        </tbody>

    </table>
</div>

</body>
</html>
