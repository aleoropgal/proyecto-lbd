<?php
$id_cliente  = htmlspecialchars($_POST['id_cliente']);
$id_empleado = htmlspecialchars($_POST['id_empleado']);
$num = intval($_POST['num']);
?>
<html>
<head>
    <title>Renta de Equipo Médico</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
<br>
<div class="formulario">

    <div style="text-align: right;">
        <a href="nuevarenta.php" class="btn">
            <button class="btn-style">Atrás</button>
        </a>
    </div>

    <h1 align="center">Rentas</h1>
    <h2 align="center">Información Detallada</h2>

    <form align=center method="POST" action="../control/regrentaControl.php">

        <input type="hidden" name="id_cliente" value="<?php echo $id_cliente; ?>">
        <input type="hidden" name="id_empleado" value="<?php echo $id_empleado; ?>">
        <input type="hidden" name="num" value="<?php echo $num; ?>">

        <?php
        for ($i = 1; $i <= $num; $i++) {
            echo "<h3>Artículo $i</h3>";

            echo "<label>ID del artículo:</label><br>";
            echo "<input type='number' name='id_articulo[]' required><br><br>";

            echo "<label>Fecha límite de devolución:</label><br>";
            echo "<input type='date' name='fecha_limite[]' required><br><br>";

            echo "<hr>";
        }
        ?>

        <br>
        <input type="submit" value="Registrar renta">
    </form>

</div>
</body>
</html>
