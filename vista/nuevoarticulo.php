<html>
        <head>
                <title> Renta de Equipo Médico </title>
                <link rel="stylesheet" href="../style.css">
        </head>
        <body>
                <br>
                <div class="formulario">
                <div style="text-align: right;">
                    <a href = "articulos.php" class="btn">
                        <button class="btn-style"> Atrás </button>
                    </a>
                </div>
                        <br><h1 align=center> Artículos </h1>
                        <h2 align=center> Nuevo artículo </h2>

                <form align=center method="POST" action="../control/regarticuloControl.php">
                <h3> Información General </h3>
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre" required><br><br>
                <label for="marca">Marca:</label><br>
                <input type="text" id="marca" name="marca" required><br><br>
                <label for="modelo">Modelo:</label><br>
                <input type="text" id="modelo" name="modelo"><br><br>
                <label for="descripcion">Descripción:</label><br>
                <input type="text" id="descripcion" name="descripcion" required><br><br>
                <label for="cpd">Costo de renta por día:</label><br>
                <input type="text" id="cpd" name="cpd" required><br><br>
                <input type="submit" value="Registrarse">
                </form>
                </div>

        </body>
</html>