<?php
$usuario=$POST'['usuario'];
$contrasenia=$POST'['contrasenia'];

$conexion=mysqli_connect("localhost", "root", "", "bdprueba");
$cosulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave=$contrasenia'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if ($filas>0) {
	Header("location:index.html");
}
else {
	Echo "Error en la autenticación";
}
mysqli_free_result($resultado);
mysqli_close($conexion);