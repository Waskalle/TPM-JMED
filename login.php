<?php

$usuario=$_POST['email'];
$password=$_POST['pwd'];



if ($usuario != "" && $password !="")
{

	$conexion = mysql_connect ("localhost","root","");
	mysql_select_db ("tpm",$conexion);
	
	$consulta =("SELECT * FROM usuario
	where nombre_usuario='$usuario' and contraseña_usuario='$password' ");
	$execonsulta = mysql_query($consulta);
        @$num_resultados=mysql_num_rows($execonsulta);
		
	if (!@$num_resultados <=0) 
	{
	
 		for ($i=0;$i<$num_resultados;$i++)
		{
				$var=mysql_fetch_array($execonsulta);
					
				switch ($var['tipo_usuario']) 
				{

					case 'Maestro':
						# code...
					session_start();
			           	$_SESSION ["Maestro"] = "Maestro";

					header('Location: indexMaestro.php');
						break;

					case 'Alumno':
							# code...
					session_start();
			           	$_SESSION ["Alumno"] = "Alumno";

					header('Location: indexAlumno.php');
						break;
					
					default:
						# code...
					echo"<script>alert('Usuario inexistente.');window.location.href=\'login.html\'</script>";
						break;
				}								
 		}
	}
	else 
	{

		echo" No has llenado alguno de los campos <br> <br>
	
	 	<a href='Login.html' > Volver a Intentarlo </a> ";
	}
?>