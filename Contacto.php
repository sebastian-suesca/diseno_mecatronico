<?php include_once 'assets/header.php'; ?>
<h1>Contacto</h1>
    <?php if(isset($_GET['mensaje'])): ?>
    <div class="alert alert-primary"><?= $_GET['mensaje']?></div>
    <?php endif; ?>
    <form action="guardar_contacto.php" method="POST" >
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="apellido">Apellido:</label>
      <input type="text" id="apellido" name="apellido" required>

      <label for="email">Correo electrónico:</label>
      <input type="email" id="email" name="email" required>

      <label for="telefono">Teléfono:</label>
      <input type="text" id="telefono" name="telefono">

      <label for="mensaje">Mensaje:</label>
      <textarea id="mensaje" name="mensaje" required></textarea>
      <br>
      <br>
      <div style="width: 13%; margin: 0 auto;">
        <input type="submit" value="Enviar">
      </div>
    </form>
    <br>

<?php include_once 'assets/footer.php'; ?>