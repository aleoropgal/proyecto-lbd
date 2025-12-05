<?php
    include "../control/busclienteControl.php";
    $clientes = tablaClientes();
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

    <h1 class="section-title">Clientes</h1>

    <div style="text-align: center;">
        <a href = "nuevocliente.php" class="btn">
             <button class="btn-style"> Agregar nuevo cliente </button>
        </a>
    </div>

    <form method="POST">
        <br><h2> Búsqueda </h2>
        <label>ID: </label>
        <input type="number" id="id_cliente" name="id_cliente"><br><br>
        <label>Nombre:     </label>
        <input type="text" name="nombre"><br><br>
        <label>Apellidos:   </label>
        <input type="text" name="apellidos"><br><br>
        <input type="submit" value="Buscar cliente">
    </form>


    <table class="tabla-medica">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha de Nacimiento</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Direccion</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($clientes)): ?>
                <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td><?= htmlspecialchars($cliente['id_cliente']) ?></td>
                        <td><?= htmlspecialchars($cliente['nombre']) ?></td>
                        <td><?= htmlspecialchars($cliente['apellidos']) ?></td>
                        <td><?= htmlspecialchars($cliente['fecha_nacimiento']) ?></td>
                        <td><?= htmlspecialchars($cliente['telefono']) ?></td>
                        <td><?= htmlspecialchars($cliente['email']) ?></td>
                        <td><?= htmlspecialchars($cliente['direccion']) ?></td>
                    </tr>
                <?php endforeach; ?>

            <?php else: ?>
                <tr>
                    <td colspan="7">No se encontró este cliente</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>