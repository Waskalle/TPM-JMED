<?php  

@$usuario=$_POST['radio'];

if($usuario == 'Alumno')

{ //BEGIN ALUMNO
  echo
"
<!DOCTYPE html>
	<html>
		<head>

		    <meta charset='utf-8'>
		    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
		    <meta name='viewport' content='width=device-width, initial-scale=1'>
		    <meta name='description' content='Project manager website platform, created for IT students'>
		    <meta name='TPM' content='Tic Project Manager'>

		    <title>TPM&trade;</title>

		    <!-- Bootstrap Core CSS -->
		    <link href='../css/bootstrap.min.css' rel='stylesheet'>

		    <!-- Custom CSS -->
		    <link href='../css/scrolling-nav.css' rel='stylesheet'>


		</head>
		<body id='page-top' data-spy='scroll' data-target='.navbar-fixed-top'>

		    <!-- Navigation -->
		    <nav class='navbar navbar-default navbar-fixed-top' role='navigation'>
		        <div class='container'>
		            <div class='navbar-header page-scroll'>
		                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-ex1-collapse'>
		                    <span class='sr-only'>Toggle navigation</span>
		                    <span class='icon-bar'></span>
		                    <span class='icon-bar'></span>
		                    <span class='icon-bar'></span>
		                </button>
		                <a class='navbar-brand page-scroll' href='../index.html'>Tic Project Manager <b>| </b> <font color='orange'> Alumno </font></a>
		            </div>

		            <!-- Collect the nav links, forms, and other content for toggling -->
		      
		      <div class='container'>
		            <div class='row'>
		                <div class='col-lg-12'>
		                    <h1>Login to T.P.M</h1>
		                        <div class='panel-body'>
		                     <form accept-charset='UTF-8' role='form' action='http://localhost/opentpmw/conexiones/registrar.php' method='post'>
		                        <fieldset>

		                            <div class='form-group' align='left'>
		                                <label>Name: </label>
		                                <input class='form-control' placeholder='Type your Name...' name='alumno_nombre' type='text' required>
		                            </div>
		                            <div class='form-group' align='left'>
		                                <label>Last-Name: </label>
		                                <input class='form-control' placeholder='Type your lastname..' name='alumno_apellidos' type='text' required>
		                            </div>
		                            <div class='form-group' align='left'>
		                                <label>Age: </label>
		                                <input class='form-control' placeholder='Type your number of years...' name='alumno_edad' type='number' required>
		                            </div>
		                            <div class='form-group' align='left'>
		                                <label>E-mail: </label>
		                                <input class='form-control' placeholder='example@domain.com' name='alumno_mail' type='mail' required>
		                            </div>
		                            <div class='form-group' align='left'>
		                                <label>Group & Grade: </label>
		                                <input class='form-control' placeholder='Type your group and grade...' name='alumno_grupo' type='text' required>
		                            </div>
		                            <div class='form-group' align='left'>
		                            	<label>Career:</label>
		                                	<select name='alumno_carrera' required class='form-control'>
		                                		    <option default>[Select one of them (Career)]</option>
		                                				<option value='TIC'>Tecnologías de la Información y Comunicación (Area sistemas informaticos)</option>
		                                				<option value='ITIC'> Ingeniería en Tecnologías de la Información y Comunicación</option>
		                                		
		                                	</select>
		                            </div>
		                            <div class='form-group' align='left'>
		                                <label>Password: </label>
		                                <input class='form-control' placeholder='Type your password...' name='alumno_contraseña' type='password' required>
		                            </div>
		                            
		                            <input class='btn btn-lg btn-primary btn-block' type='submit' value='Registrar'>
		                        </fieldset>
		                    </form> 
		                </div>
		                </div>
		            </div>
		        </div>

		   

		    <!-- Style navigation files:-->
		    <!-- jQuery -->
		    <script src='js/jquery.js'></script>
		    <!-- Bootstrap Core JavaScript -->
		    <script src='js/bootstrap.min.js'></script>
		    <!-- Scrolling Nav JavaScript -->
		    <script src='js/jquery.easing.min.js'></script>
		    <script src='js/scrolling-nav.js'></script>
		    
		</body>

		</html>
";

}	//FIN ALUMNO

else if($usuario == 'Maestro')

{
	echo
"
<!DOCTYPE html>
	<html>
		<head>

		    <meta charset='utf-8'>
		    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
		    <meta name='viewport' content='width=device-width, initial-scale=1'>
		    <meta name='description' content='Project manager website platform, created for IT students'>
		    <meta name='TPM' content='Tic Project Manager'>

		    <title>TPM&trade;</title>

		    <!-- Bootstrap Core CSS -->
		    <link href='../css/bootstrap.min.css' rel='stylesheet'>

		    <!-- Custom CSS -->
		    <link href='../css/scrolling-nav.css' rel='stylesheet'>


		</head>
		<body id='page-top' data-spy='scroll' data-target='.navbar-fixed-top'>

		    <!-- Navigation -->
		    <nav class='navbar navbar-default navbar-fixed-top' role='navigation'>
		        <div class='container'>
		            <div class='navbar-header page-scroll'>
		                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-ex1-collapse'>
		                    <span class='sr-only'>Toggle navigation</span>
		                    <span class='icon-bar'></span>
		                    <span class='icon-bar'></span>
		                    <span class='icon-bar'></span>
		                </button>
		                <a class='navbar-brand page-scroll' href='../index.html'>Tic Project Manager <b>| </b> <font color='orange'> Maestro </font></a>
		            </div>

		            <!-- Collect the nav links, forms, and other content for toggling -->
		      
		      <div class='container'>
		            <div class='row'>
		                <div class='col-lg-12'>
		                    <h1>Sign-up to T.P.M</h1>
		                        <div class='panel-body'>
		                    <form accept-charset='UTF-8' role='form' action='http://localhost/opentpmw/conexiones/registrar.php' method='post'>
		                        <fieldset>

		                            <div class='form-group' align='left'>
		                                <label>Nombre: </label>
		                                <input class='form-control' placeholder='Ingresa tu nombre...' name='maestro_nombre' type='text' required>
		                            </div>
		                            <div class='form-group' align='left'>
		                                <label>Apellidos: </label>
		                                <input class='form-control' placeholder='Ingresa tus apellidos..' name='maestro_apellidos' type='text' required>
		                            </div>
		                            <div class='form-group' align='left'>
		                                <label>Edad: </label>
		                                <input class='form-control' placeholder='Ingresa tus años..' name='maestro_edad' type='number' required>
		                            </div>
		                            <div class='form-group' align='left'>
		                                <label>Correo Electrónico: </label>
		                                <input class='form-control' placeholder='Ingresa tu email..' name='maestro_correo' type='mail' required>
		                            </div>
		                            <div class='form-group' align='left'>
		                                <label>Materia: </label>
		                                <input class='form-control' placeholder='Ingresa el grupo en el que estas cursando..' name='maestro_materia' type='text' required>
		                            </div>                          
		                            <input class='btn btn-lg btn-primary btn-block' type='submit' value='Registrar'>
		                        </fieldset>
		                    </form> 
		                </div>
		                </div>
		            </div>
		        </div>

		   

		    <!-- Style navigation files:-->
		    <!-- jQuery -->
		    <script src='js/jquery.js'></script>
		    <!-- Bootstrap Core JavaScript -->
		    <script src='js/bootstrap.min.js'></script>
		    <!-- Scrolling Nav JavaScript -->
		    <script src='js/jquery.easing.min.js'></script>
		    <script src='js/scrolling-nav.js'></script>
		    
		</body>

		</html>
";
}

else

{
	echo
"
<!DOCTYPE html>
	<html>
		<head>

		    <meta charset='utf-8'>
		    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
		    <meta name='viewport' content='width=device-width, initial-scale=1'>
		    <meta name='description' content='Project manager website platform, created for IT students'>
		    <meta name='TPM' content='Tic Project Manager'>

		    <title>TPM&trade;</title>

		    <!-- Bootstrap Core CSS -->
		    <link href='../css/bootstrap.min.css' rel='stylesheet'>

		    <!-- Custom CSS -->
		    <link href='../css/scrolling-nav.css' rel='stylesheet'>


		</head>
		<body id='page-top' data-spy='scroll' data-target='.navbar-fixed-top'>

		    <!-- Navigation -->
		    <nav class='navbar navbar-default navbar-fixed-top' role='navigation'>
		        <div class='container'>
		            <div class='navbar-header page-scroll'>
		                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-ex1-collapse'>
		                    <span class='sr-only'>Toggle navigation</span>
		                    <span class='icon-bar'></span>
		                    <span class='icon-bar'></span>
		                    <span class='icon-bar'></span>
		                </button>
		                <a class='navbar-brand page-scroll' href='#page-top'>Tic Project Manager <b>| </b> <font color='orange'> No body </font></a>
		            </div>

		            <!-- Collect the nav links, forms, and other content for toggling -->
		      
		      <div class='container'>
		            <div class='row'>
		                <div class='col-lg-12'>
		                    <h1>Sign-up to T.P.M</h1>
		                        <div class='panel-body'>
		                    		
		                    		<h1> Fatal Error!!! </h!
		                    		<p> Sentimos que aya ocurrido esto... | JMED se disculpa ante ti</p>
		                	</div>
		                </div>
		            </div>
		        </div>

		   

		    <!-- Style navigation files:-->
		    <!-- jQuery -->
		    <script src='js/jquery.js'></script>
		    <!-- Bootstrap Core JavaScript -->
		    <script src='js/bootstrap.min.js'></script>
		    <!-- Scrolling Nav JavaScript -->
		    <script src='js/jquery.easing.min.js'></script>
		    <script src='js/scrolling-nav.js'></script>
		    
		</body>

		</html>
";
}


?>