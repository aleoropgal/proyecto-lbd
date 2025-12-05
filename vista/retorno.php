<?php
    $id_detalle = $_GET['id_detalle'];
?>

<html>
<head>
    <title>Registrar devolución</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="formulario">
    <h1>Registrar devolución</h1>

    <form method="POST" action="../control/retornoControl.php">

        <input type="hidden" name="id_detalle" value="<?= $id_detalle ?>">
        <label>ID empleado que recibe:</label><br>
        <input type="number" name="id_empretorno" required><br><br>
        <label>Fecha entregado:</label><br>
        <input type="date" name="fecha_entregado" required><br><br>
        <input type="submit" value="Guardar">
    </form>

</div>

</body>
</html>
