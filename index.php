<html>
        <head>
                <title> Renta de Equipo Médico </title>
                <link rel="stylesheet" href="style.css">
        </head>
        <body>
                <div class="formulario">
                        <br><h1> Renta de Equipo Médico </h1>
                        <form method="POST" action="./control/loginControl.php">
                        <br><h2> Inicio de sesión del empleado </h2>
                        <label for="username">Nombre de Usuario:</label><br>
                        <input type="text" id="username" name="username" required><br><br>
                        <label for="password">Contraseña:</label><br>
                        <input type="password" id="password" name="password" required><br><br>
                        <input type="submit" value="Ingresar">
                        </form>
                        <br><p> ¿No tienes una cuenta? <a href="./vista/registro.php">Registrarse</p>
                </div>

        </body>
</html>