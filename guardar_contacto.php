<?php

require_once 'assets/conexion.php';

if(isset($_POST)){
				
	// Recoger datos del formulario
    $nombre = trim($_POST["nombre"]);
    $email = trim($_POST["email"]);
    $apellido = trim($_POST["apellido"]);
    $telefono = trim($_POST["telefono"]);
	$mensaje = trim($_POST["mensaje"]);
	
	$sql = "INSERT INTO messages_contact VALUES(null, '$nombre', '$apellido', '$email', '$telefono', '$mensaje');";
    $guardar = $conn->query($sql);

	$mensaje = "Solicitud de contacto enviada";
	
	header("Location: Contacto.php?mensaje=$mensaje");
	
}

?>