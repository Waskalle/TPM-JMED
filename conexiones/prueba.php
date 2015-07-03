<?php  

	include ("funciones.php");
	$conn = conexion();

	


$consulta = mysql_query("SELECT alumno_nombre from alumno",$conn);

echo " <select name='alumnos'> ";
	while($fila=mysql_fetch_array($consulta)) 
	{
		echo"<option value='".$fila['alumno_nombre']."'>".$fila['alumno_nombre']."</option> ";
	}
	
	echo"</select>";

?>