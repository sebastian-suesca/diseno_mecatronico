<?php
$servidor = 'dbcampibot.cz0nydksajbm.us-east-2.rds.amazonaws.com';
$usuario = 'admin';
$password = 'campibot_2023';
$basededatos = 'dbcampibot';

// Iniciar la sesión
if(!isset($_SESSION)){
    session_start();
}
    
try {
  $conn = new PDO("mysql:host=$servidor;dbname=$basededatos", $usuario, $password);
  // configurar el modo de error de PDO a excepción
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexión exitosa a la base de datos";
} catch(PDOException $e) {
  echo "Error en la conexión a la base de datos: " . $e->getMessage();
}

?>