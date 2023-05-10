<?php
$conexion=mysqli_connect("localhost","gleyder","1619*","senaphp");
mysqli_query($conexion, "insert into aprendiz(nombres,apellidos,ficha) values
('$_REQUEST[nombres]','$_REQUEST[apellidos]',$_REQUEST[ficha])") or die
("Problemas en el select" . mysqli_error($conexion));
mysqli_close($conexion);
echo "Registro exitoso";
?>