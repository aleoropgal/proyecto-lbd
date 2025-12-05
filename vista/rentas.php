<?php
    include "../control/busrentaControl.php";
    $rentas = tablaRentas();
?>

<html>
<head>
    <title>Renta de Equipo Médico</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<div class="formulario">
    <div style="text-align: right;">
        <a href = "home.php" class="btn">
            <button class="btn-style"> Atrás </button>
        </a>
    </div>

    <h1 class="section-title">Rentas</h1>

    <div style="text-align: center;">
        <a href="nuevarenta.php">
            <button class="btn-style">Agregar nueva renta</button>
        </a>
    </div>

    <form method="POST">
        <h2>Búsqueda</h2>
        <label>ID Renta:</label>
        <input type="number" name="id_renta"><br><br>

        <label>ID Cliente:</label>
        <input type="number" name="id_cliente"><br><br>

        <label>ID Artículo:</label>
        <input type="number" name="id_articulo"><br><br>

        <input type="submit" value="Buscar renta">
    </form>

    <table class="tabla-medica">
        <thead>
            <tr>
                <th>ID Renta</th>
                <th>Cliente</th>
                <th>ID Empleado</th>
                <th>Fecha</th>
                <th>Detalles</th>
            </tr>
        </thead>

        <tbody>
        <?php if (!empty($rentas)): ?>
            <?php foreach ($rentas as $renta): ?>
                <tr>
                    <td><?= $renta['id_renta'] ?></td>
                    <td><?= $renta['id_cliente'] ?></td>
                    <td><?= $renta['id_emprenta'] ?></td>
                    <td><?= $renta['fecha_registro'] ?></td>
                    <td>
                        <a href="rentadetalle.php?id=<?= $renta['id_renta']?>">
                            Ver detalles
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="5">No se encontraron rentas</td></tr>
        <?php endif; ?>
        </tbody>

    </table>
</div>

</body>
</html>
