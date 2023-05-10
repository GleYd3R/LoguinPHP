<docttype html>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>
            Captura
        </title>
    </head>

    <body>
        <?php
        $conexion = mysqli_connect("localhost", "phpmyadmin", "1619*", "senaphp") or die("Problems con la conexion a la BD");
        echo "Conectado a la base de datos";
        mysqli_query($conexion, "insert into aprendiz(nombres,apellidos,ficha) values
('$_REQUEST[nombres]','$_REQUEST[apellido]',$_REQUEST[ficha])") or die("Problemas en el select" . mysqli_error($conexion));
        ?>
    </body>

    </html>