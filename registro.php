<?php include_once 'assets/header.php'; ?>
<h1>Registro</h1>
    <form action="guardar_usuario.php" method="POST" >
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="email">Correo electrónico:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Contraseña</label>
      <input type="password" id="password" name="password" required>

      <label for="telefono">Teléfono:</label>
      <input type="text" id="telefono" name="telefono" required>
      <br>
      <br>
      <div style="width: 13%; margin: 0 auto;">
        <input type="submit" value="Enviar">
      </div>
    </form>
    <br>

<?php include_once 'assets/footer.php'; ?>