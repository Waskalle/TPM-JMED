<?php  

include ("funciones.php");
$conn = conexion();




//QUERYES DE INSERCIÓN A LA BD

//Variables Alumno
	@$id_alumno = getGUID();

	@$id_alumno = substr($id_alumno, 1,length -1);
	@$nombre_alumno = $_POST['alumno_nombre'];
	@$apellidos_alumno = $_POST['alumno_apellidos'];
	@$edad_alumno = $_POST['alumno_edad'];
	@$mail_alumno = $_POST['alumno_mail'];
	@$grupo_alumno = $_POST['alumno_grupo'];
	@$carrera_alumno = $_POST['alumno_carrera'];

	//INSERT
	$Insert_Alumno = mysql_query("INSERT INTO alumno VALUES ('$id_alumno',
																			'$nombre_alumno',
																			'$apellidos_alumno',
																			$edad_alumno,
																			'$mail_alumno',
																			'$grupo_alumno',
																			'$carrera_alumno',
																			'',
																			'',
																			'',
																			'')",$conn);
	// -------------------------------------------------------------------------------------------------
	//UPDATE
	$Update_Alumno = mysql_query("UPDATE alumno SET alumno_nombre='$nombre_alumno',
													alumno_apellidos ='$apellidos_alumno',
													alumno_edad = '$edad_alumno',
													alumno_mail = '$mail_alumno',
													alumno_grupo = '$grupo_alumno',
													alumno_carrera = '$carrera_alumno' WHERE alumno_id = '$id_alumno'",$conn);
		//-----------------------------------------------------------------------------------------------------------------
			//DELETE
			$Delete_ALumno = mysql_query("DELETE FROM alumno WHERE alumno_id = '$id_alumno'",$conn);
			
		//---------------------------------------------------------------------------------------------------------------------
			//SELECT
			$Select_Alumno = mysql_query("SELECT * FROM alumno WHERE alumno_nombre = '$nombre_alumno'",$conn);

		  @$num_resultados=mysql_num_rows($Select_Alumno); // CACHAS EL NUMERO DE RESULTADOS QUE OBTUVO LA CONSULTA


		  for ($i=0;$i<$num_resultados;$i++) //RECORRES CADA REGISTRO (CADA CAMPO DE LA TABLA)
		  {
		  $var=mysql_fetch_array($Select_Alumno); //VA OBTENIENDO LO QUE TIENE LA TABLA EN CADA CAMPO

		@$var['Campo de la tabla']; //OBTIENES LA INFO DE UN CAMPO EN ESPECIFICO
//-----------------------------------------------------------------------------------------------------------


//Variables Maestro
			@$id_maestro = getGUID();
			@$id_maestro = substr($id_maestro, 1,length -1);
			@$nombre_maestro = $_POST['maestro_nombre'];
			@$apellidos_maestro = $_POST['maestro_apellidos'];
			@$edad_maestro = $_POST['maestro_edad'];
			@$correo_maestro = $_POST['maestro_correo'];
			@$estado_maestro = 'Activo';
			@$materia_maestro = $_POST['maestro_materia'];

			//INSERT
			$Insert_Maestro = mysql_query("INSERT INTO maestro VALUES ('$id_maestro',
																				'$nombre_maestro',
																				'$apellidos_maestro',
																				'$edad_maestro',
																				'$correo_maestro',
																				'$estado_maestro',
																				'$materia_maestro')",$conn);
			// -------------------------------------------------------------------------------------------------
			//UPDATE
			$Update_Maestro = mysql_query("UPDATE maestro SET maestro_nombre='$nombre_maestro',
														maestro_apellidos ='$apellidos_maestro',
														maestro_edad = '$edad_maestro',
														maestro_correo = '$correo_maestro',
														maestro_estado = '$estado_maestro',
														maestro_materia = '$materia_maestro' WHERE maestro_id = '$id_maestro'",$conn);
			//-----------------------------------------------------------------------------------------------------------------
				//DELETE
				$Delete_Maestro = mysql_query("DELETE FROM maestro WHERE maestro_id = '$id_maestro'",$conn);
				
			//---------------------------------------------------------------------------------------------------------------------
				//SELECT
				$Select_Maestro = mysql_query("SELECT * FROM maestro WHERE maestro_nombre = '$nombre_maestro'",$conn);

			  @$num_resultados=mysql_num_rows($Select_Maestro); // CACHAS EL NUMERO DE RESULTADOS QUE OBTUVO LA CONSULTA


			  for ($i=0;$i<$num_resultados;$i++) //RECORRES CADA REGISTRO (CADA CAMPO DE LA TABLA)
			  {
			  $var=mysql_fetch_array($Select_Maestro); //VA OBTENIENDO LO QUE TIENE LA TABLA EN CADA CAMPO

				@$var['Campo de la tabla']; //OBTIENES LA INFO DE UN CAMPO EN ESPECIFICO
//-----------------------------------------------------------------------------------------------------------


?>