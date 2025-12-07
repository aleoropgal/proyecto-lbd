<?php
    include "../control/busarticuloControl.php";
    $articulos = tablaArticulos();
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

    <h1 class="section-title">Artículo</h1>

    <div style="text-align: center;">
        <a href = "nuevoarticulo.php" class="btn">
             <button class="btn-style"> Agregar nuevo artículo </button>
        </a>
    </div>

    <form method="POST">
        <br><h2> Búsqueda </h2>
        <label>ID: </label>
        <input type="number" id="id_individual" name="id_individual"><br><br>
        <label>Nombre:     </label>
        <input type="text" name="nombre"><br><br>
        <label>Marca:   </label>
        <input type="text" name="marca"><br><br>
        <input type="submit" value="Buscar artículos">
    </form>


    <table class="tabla-medica">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Descripcion</th>
                <th>Costo por día</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($articulos)): ?>
                <?php foreach ($articulos as $articulo): ?>
                    <tr>
                        <td><?= htmlspecialchars($articulo['id_individual']) ?></td>
                        <td><?= htmlspecialchars($articulo['nombre']) ?></td>
                        <td><?= htmlspecialchars($articulo['modelo']) ?></td>
                        <td><?= htmlspecialchars($articulo['marca']) ?></td>
                        <td><?= htmlspecialchars($articulo['descripcion']) ?></td>
                        <td><?= htmlspecialchars($articulo['cpd']) ?></td>
                    </tr>
                <?php endforeach; ?>

            <?php else: ?>
                <tr>
                    <td colspan="6">No se encontró este artículo</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
