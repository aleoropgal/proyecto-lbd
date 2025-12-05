<?php

        include "../modelo/conexion.php";

        $nombre = htmlspecialchars($_POST['nombre']);
        $marca = htmlspecialchars($_POST['marca']);
        $modelo = htmlspecialchars($_POST['modelo']);
        $cpd = htmlspecialchars($_POST['cpd']);
        $descripcion = htmlspecialchars($_POST['descripcion']);
        $cpd = htmlspecialchars($_POST['cpd']);
        $conexion = conecta();

        $stmt = $conexion->prepare("insert into articulo (nombre, modelo, descripcion) values(:nombre, :modelo, :descripcion)");
        $stmt->bindParam(":nombre",$nombre);
        $stmt->bindParam(":modelo",$modelo);
        $stmt->bindParam(":descripcion",$descripcion);
        $stmt->execute();

        $id_articulo = $conexion->LastInsertId();
        
        $stmt2 = $conexion->prepare("insert into marca (nombre) values(:marca)");
        $stmt2->bindParam(":marca",$marca);
        $stmt2->execute();

        $id_marca = $conexion->LastInsertId();


        $stmt3 = $conexion->prepare("insert into articulo_unidad (id_articulo,id_marca,cpd) values(:id_articulo, :id_marca, :cpd)");
        $stmt3->bindParam(":id_articulo",$id_articulo);
        $stmt3->bindParam(":id_marca",$id_marca);
        $stmt3->bindParam(":cpd",$cpd);
        $stmt3->execute();

        $id_individual = $conexion->LastInsertId();
        //echo "Registro almacenado con éxito en la base de datos"; ?>

<html>
        <head>
                <title> Renta de Equipo Médico </title>
                <link rel="stylesheet" href="../style.css">
        </head>
        <body>
                <div class="formulario">
                <br><h1> Articulo </h1>
                <h2> Nuevo Articulo </h2>

                <p> Artículo agregado con éxito </p>
                <p> Su <b>ID</b> de artículol es <b><?php echo "$id_individual"; ?></b> </p>
                <div style="text-align: center;">
                        <a href = "../../proyecto/vista/articulos.php" class="btn">
                                <button class="btn-style"> Atrás </button>
                        </a>
                </div>
                </div>


        </body>
</html>