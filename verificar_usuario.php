<?php
// Iniciar la sesión y la conexión a bd
include 'assets/conexion.php';

// Recoger datos del formulario
if(isset($_POST)){
				
	// Recoger datos del formulario
	$email = trim($_POST['email']);
	$password = $_POST['password'];
	
	// Consulta para comprobar las credenciales del usuario
	$sql = "SELECT * FROM users WHERE email = '$email'";
	$login = $conn->query($sql);
	
	if($login && $login->rowCount() == 1){
		$usuario = mysqli_fetch_assoc($login);
		
		// Comprobar la contraseña
		
		if($usuario['password']==$password){
			// Utilizar una sesión para guardar los datos del usuario logueado
			$_SESSION['usuario'] = $usuario;
			header('Location: index.php');
			
		}else{
			// Si algo falla enviar una sesión con el fallo
			$_SESSION['error_login'] = "Login incorrecto!!";
			header('Location: login.php');
		}
	}else{
		// mensaje de error
		$_SESSION['error_login'] = "Login incorrecto!!";
		header('Location: login.php');
	}
	
}

?>