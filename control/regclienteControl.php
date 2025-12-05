<?php

        include "../modelo/conexion.php";

        $nombre = htmlspecialchars($_POST['nombre']);
        $apellidos = htmlspecialchars($_POST['apellidos']);
        $dob = htmlspecialchars($_POST['dob']);
        $email = htmlspecialchars($_POST['email']);
        $telefono = htmlspecialchars($_POST['telefono']);
        $direccion = htmlspecialchars($_POST['direccion']);
        $conexion = conecta();

        $stmt = $conexion->prepare("insert into persona (nombre, apellidos, fecha_nacimiento, email, telefono, direccion) values(:nombre, :apellidos, :dob, :email, :telefono, :direccion)");
        $stmt->bindParam(":nombre",$nombre);
        $stmt->bindParam(":apellidos",$apellidos);
        $stmt->bindParam(":dob",$dob);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":telefono",$telefono);
        $stmt->bindParam(":direccion",$direccion);


        $stmt->execute();

        $id_persona = $conexion->LastInsertId();

        $stmt2 = $conexion->prepare("insert into cliente (id_persona) VALUES (:id_persona)");
        $stmt2->bindParam(":id_persona", $id_persona);

        $stmt2->execute();

        $id_cliente = $conexion->LastInsertId();

        //echo "Registro almacenado con éxito en la base de datos"; ?>

<html>
        <head>
                <title> Renta de Equipo Médico </title>
                <link rel="stylesheet" href="../style.css">
        </head>
        <body>
                <div class="formulario">
                <br><h1> Cliente </h1>
                <h2> Nuevo Cliente </h2>

                <p> Cliente agregado con éxito </p>
                <p> Su <b>ID</b> de cliente es <b><?php echo "$id_cliente"; ?></b> </p>
                <div style="text-align: center;">
                        <a href = "../../proyecto/vista/clientes.php" class="btn">
                                <button class="btn-style"> Atrás </button>
                        </a>
                </div>
                </div>


        </body>
</html>