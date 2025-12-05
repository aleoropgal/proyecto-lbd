<html>
        <head>
                <title> Renta de Equipo Médico </title>
                <link rel="stylesheet" href="../style.css">
        </head>
        <body>
                <br>
                <div class="formulario">
                        <br><h1> Renta de Equipo Médico </h1>
                        <h2> Registro del empleado </h2>

                <form method="POST" action="../control/registroControl.php">
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
                

                <h3> Datos para inicio de sesión </h3>
                <label for="username">Nombre de Usuario:</label><br>
                <input type="text" id="username" name="username" required><br><br>
                <label for="password">Contraseña:</label><br>
                <input type="password" id="password" name="password" required><br><br>
                <input type="submit" value="Registrarse">
                </form>
                </div>

        </body>
</html>