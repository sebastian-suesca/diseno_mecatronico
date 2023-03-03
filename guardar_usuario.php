
<?php
  include("assets/conexion.php");
  // Procesar el formulario cuando se envía
 if($_POST){
    // Inicializar variables
    
    $nombre = trim($_POST["nombre"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $telefono = trim($_POST["telefono"]);

    $sql = "INSERT INTO users VALUES(null, '$nombre', '$email', '$password', '$telefono');";
    $guardar = $conn->query($sql);
    
    $mensaje = "Usuario registrado exitosamente";
    
    header("Location: login.php?mensaje=$mensaje");

  }
?>