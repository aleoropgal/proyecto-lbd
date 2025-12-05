<?php

        include "../modelo/conexion.php";

        $nombre = htmlspecialchars($_POST['nombre']);
        $apellidos = htmlspecialchars($_POST['apellidos']);
        $dob = htmlspecialchars($_POST['dob']);
        $email = htmlspecialchars($_POST['email']);
        $telefono = htmlspecialchars($_POST['telefono']);
        $direccion = htmlspecialchars($_POST['direccion']);
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        $conexion = conecta();

        $stmt = $conexion->prepare("INSERT INTO persona (nombre, apellidos, fecha_nacimiento, email, telefono, direccion) values(:nombre, :apellidos, :dob, :email, :telefono, :direccion)");
        $stmt->bindParam(":nombre",$nombre);
        $stmt->bindParam(":apellidos",$apellidos);
        $stmt->bindParam(":dob",$dob);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":telefono",$telefono);
        $stmt->bindParam(":direccion",$direccion);


        $stmt->execute();

        $id_persona = $conexion->LastInsertId();

        $stmt2 = $conexion->prepare("INSERT INTO empleado (id_persona, username, password) VALUES (:id_persona, :username, :password)");
        $stmt2->bindParam(":id_persona", $id_persona);
        $stmt2->bindParam(":username", $username);
        $stmt2->bindParam(":password", $password);

        $stmt2->execute();

        //echo "Registro almacenado con éxito en la base de datos"; ?>

<html>
        <head>
                <title> Renta de Equipo Médico </title>
                <link rel="stylesheet" href="../style.css">
        </head>
        <body>
                <div class="formulario">
                <br><h1> Renta de Equipo Médico </h1>
                <h2> Registro del empleado </h2>

                <p> Empleado agregado con éxito </p>
                <div style="text-align: center;">
                        <a href = "../../proyecto/index.php" class="btn">
                                <button class="btn-style"> Ir a Inicio de Sesión </button>
                        </a>
                </div>
                </div>


        </body>
</html>