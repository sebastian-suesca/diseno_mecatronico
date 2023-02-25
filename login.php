<?php include_once 'assets/header.php'; ?>
  <div class="container">
    <br>
    <?php if(isset($_GET['mensaje'])): ?>
    <div class="alert alert-primary"><?= $_GET['mensaje']?></div>
    <?php endif; ?>
    <form action="verificar_usuario.php" method="POST" class="form-control">
      <br>
      <h3 style="text-align:center;">Login</h3>
      <div class="mb-3">
        <label for="email" class="form-label">Correo</label>
        <input type="email"
          class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Escriba su correo">
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password"
          class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Escriba su contraseña">
      </div>
      <button type="submit" class="btn btn-primary">Entrar</button>
      <a href="registro.php" class="btn btn-success">Crear cuenta nueva</a>
    </form>
    <br>
    <br>
  </div>
<?php include_once 'assets/footer.php'; ?>