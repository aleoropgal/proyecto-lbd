<html>
        <head>
                <title> Renta de Equipo Médico </title>
                <link rel="stylesheet" href="../style.css">
        </head>
        <body>
                <br>
                <div class="formulario">
                <div style="text-align: right;">
                    <a href = "clientes.php" class="btn">
                        <button class="btn-style"> Atrás </button>
                    </a>
                </div>
                        <br><h1 align=center> Clientes </h1>
                        <h2 align=center> Nuevo cliente </h2>

                <form align=center method="POST" action="../control/regclienteControl.php">
                <h3> Información Personal </h3>
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre" required><br><br>
                <label for="apellidos">Apellidos:</label><br>
                <input type="text" id="apellidos" name="apellidos" required><br><br>
                <label for="dob">Fecha de Nacimiento:</label><br>
                <input type="date" min="1925-01-01" max="2024-12-31" id="dob" name="dob" required><br><br>
                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email"><br><br>
                <label for="telefomo">Teléfono:</label><br>
                <input type="text" id="telefono" name="telefono" required><br><br>
                <label for="direccion">Dirección:</label><br>
                <input type="text" id="direccion" name="direccion" required><br><br>
                <input type="submit" value="Registrarse">
                </form>
                </div>

        </body>
</html>