<html>
        <head>
                <title> Renta de Equipo Médico </title>
                <link rel="stylesheet" href="../style.css">
        </head>
        <body>

<?php
        session_start();
        include "../modelo/conexion.php";

        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        $conexion = conecta();

        $stmt = $conexion->prepare("SELECT id_empleado, id_persona, username, password FROM empleado WHERE username = :username LIMIT 1");
        $stmt->bindParam(":username", $username);
        $stmt->execute();

        $empleado = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($empleado) {
    
        if (($password == $empleado['password'])) {

            $_SESSION['id_empleado'] = $empleado['id_empleado'];
            $_SESSION['username'] = $empleado['username'];

            echo "<div class=\"formulario\">";
            echo "<div style=\"text-align: center;\">";
            echo "  <h2>Sesión iniciada correctamente</h2><br>";
            echo "</div>";

            echo "<div style=\"text-align: center;\">";
            echo "      <a href = \"../../proyecto/vista/home.php\" class=\"btn\">";
            echo "          <button class=\"btn-style\"> Ir a página principal </button>";
            echo "      </a>";
            echo "</div>";
            echo "</div>";


        } else {
            echo "<div class=\"formulario\">";
            echo "<div style=\"text-align: center;\">";
            echo "<h2>Contraseña incorrecta</h2><br>";
            echo "</div>";


            echo "<div style=\"text-align: center;\">";
            echo "      <a href = \"../../proyecto/index.php\" class=\"btn\">";
            echo "          <button class=\"btn-style\"> Volver a intentar </button>";
            echo "      </a>";
            echo "</div>";
            echo "</div>";
        }
    } else {
            echo "<div class=\"formulario\">";
            echo "<div style=\"text-align: center;\">";
            echo "<h2>Usuario no encontrado</h2><br>";
            echo "</div>";

            echo "<div style=\"text-align: center;\">";
            echo "      <a href = \"../../proyecto/index.php\" class=\"btn\">";
            echo "          <button class=\"btn-style\"> Volver a intentar </button>";
            echo "      </a>";
            echo "</div>";
            echo "</div>";
    }

?>


        </body>
</html>
