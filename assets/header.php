<?php include 'assets/conexion.php';?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords"
    content="Technology Revolution, The Robots Are Coming, Engineers Are Teaching AI, The Robots Are Coming, Six amazing robot inventions">
  <meta name="description" content="">
  <title>Inicio</title>
  <link rel="stylesheet" href="includes/nicepage.css" media="screen">
  <link rel="stylesheet" href="Casa.css" media="screen">
  <link rel="stylesheet" href="includes/Contacto.css">
  <script class="u-script" type="text/javascript" src="includes/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="includes/nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 5.5.0, nicepage.com">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

  <script type="application/ld+json">{
		"@type": "Organization",
		"name": "",
		"logo": "images/logo-umng.png"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Casa">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body data-home-page="Casa.html" data-home-page-title="Casa" class="u-body u-xl-mode" data-lang="es">
  <header class="u-clearfix u-header u-header" id="sec-2379">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <a href="index.php" class="u-image u-logo u-image-1">
        <img src="images/logo-umng.png" class="u-logo-image u-logo-image-1">
      </a>
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
          <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
            href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
              xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
              <g>
                <rect y="1" width="16" height="2"></rect>
                <rect y="7" width="16" height="2"></rect>
                <rect y="13" width="16" height="2"></rect>
              </g>
            </svg>
          </a>
        </div>
        <div class="u-nav-container">
          </li>
          <li class="u-nav-item"><a
              class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
              href="index.php" style="padding: 10px 20px;">Acerca de</a>
          </li>
          <li class="u-nav-item"><a
              class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
              href="galeria.php" style="padding: 10px 20px;">Galeria</a>
          </li>
          <li class="u-nav-item"><a
              class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
              href="funcionamiento.php" style="padding: 10px 20px;">Funcionamiento</a>
          </li>
          <li class="u-nav-item"><a
              class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
              href="Contacto.php" style="padding: 10px 20px;">Contacto</a>
          </li>
          <?php if(isset($_SESSION['usuario'])): ?>
          <li class="u-nav-item">Hola <?= $_SESSION['usuario']['name'] ?>
          </li>
          <li class="u-nav-item"><a
              class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
              href="cerrar.php" style="padding: 10px 20px;">Cerrar Sesion</a>
          </li>
          <?php else: ?>
          <li class="u-nav-item"><a
              class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
              href="login.php" style="padding: 10px 20px;">Login</a>
          </li>
          <?php endif; ?>
          </ul>
        </div>
        <div class="u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Index.php"> Acerca de</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="galeria.php">Galeria</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                    href="Funcionamiento.php">Funcionamiento</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contacto.php">Contacto</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.php">Login</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div>
  </header>