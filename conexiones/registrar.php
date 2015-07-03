<?php  

		include ("funciones.php");
		$conn = conexion();


//Variables Alumno
	@$id_alumno = getGUID();

	@$id_alumno = substr($id_alumno, 1,length -1);
	@$nombre_alumno = $_POST['alumno_nombre'];
	@$apellidos_alumno = $_POST['alumno_apellidos'];
	@$edad_alumno = $_POST['alumno_edad'];
	@$mail_alumno = $_POST['alumno_mail'];
	@$grupo_alumno = $_POST['alumno_grupo'];
	@$carrera_alumno = $_POST['alumno_carrera'];
	@$tipo_usuario = 'Alumno';
	@$contraseña_alumno = $_POST['alumno_contraseña'];
//

//Variables Maestro
		@$id_maestro = getGUID();
		@$id_maestro = substr($id_maestro, 1,length -1);
		@$nombre_maestro = $_POST['maestro_nombre'];
		@$apellidos_maestro = $_POST['maestro_apellidos'];
		@$edad_maestro = $_POST['maestro_edad'];
		@$correo_maestro = $_POST['maestro_correo'];
		@$estado_maestro = 'Activo';
		@$materia_maestro = $_POST['maestro_materia'];
//


		if($nombre_alumno <> '')
		{


		
			$Insert_Alumno = mysql_query("INSERT INTO alumno VALUES ('$id_alumno',
																			'$nombre_alumno',
																			'$apellidos_alumno',
																			$edad_alumno,
																			'$mail_alumno',
																			'$contraseña_alumno',
																			'$grupo_alumno',
																			'$carrera_alumno',
																			'$tipo_usuario')",$conn);
			if($Insert_Alumno)
			{
					session_start();
				      	$_SESSION ["Alumno"] = "Alumno";

					header('Location: ../indexAlumno.php');
			}
			else
			{
				echo"Error al insertar";
			}

		}

		else if ($nombre_maestro)
		{
				$Insert_Maestro = mysql_query("INSERT INTO maestro VALUES ('$id_maestro',
																			'$nombre_maestro',
																			'$apellidos_maestro',
																			'$edad_maestro',
																			'$correo_maestro',
																			'$estado_maestro',
																			'$materia_maestro')",$conn);

				if($Insert_Maestro)
				{
				
					session_start();
				      	$_SESSION ["Maestro"] = "Maestro";

					header('Location: ../indexMaestro.php');


				}
				else
				{
					echo"Error al insertar";
				}
		}	

		else
		{
			echo "NOTHING";
		}
?>