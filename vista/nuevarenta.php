<html>
        <head>
                <title> Renta de Equipo Médico </title>
                <link rel="stylesheet" href="../style.css">
        </head>
        <body>
                <br>
                <div class="formulario">
                <div style="text-align: right;">
                    <a href = "rentas.php" class="btn">
                        <button class="btn-style"> Atrás </button>
                    </a>
                </div>
                        <br><h1 align=center> Clientes </h1>
                        <h2 align=center> Nueva renta </h2>

                <form align=center method="POST" action="nuevarentadetalle.php">
                <h3> Información General </h3>
                <label for="id_cliente">ID del cliente:</label><br>
                <input type="number" id="id_cliente" name="id_cliente" required><br><br>
                <label for="id_empleado">ID del empleado:</label><br>
                <input type="number" id="id_empleado" name="id_empleado" required><br><br>
                <label for="num">Número de artículos:</label><br>
                <input type="number" id="num" name="num" required><br><br>
                <input type="submit" value="Registrar">
                </form>
                </div>

        </body>
</html>