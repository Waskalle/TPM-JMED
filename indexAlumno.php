<?php  
session_start();

if (isset($_SESSION["Alumno"]))
{
	echo"Gracias por Registrarte en nuestra pagina.";
}
else
{
	echo"No puedes acceder a este contenido por que no tienes permisos o no estas registrado en el sitio web.";
}

?>