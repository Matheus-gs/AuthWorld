<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>

  <title>AuthWorld</title>


  <!-- FavIcon -->
  <link rel="icon" href="./assets/favicon/user-check_icon.svg" />
  <link rel="apple-touch-icon" href="./assets/favicon/user-check_icon.svg" />

  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!--  -->
</head>

<body>
  <!-- Loader -->
  <div id="loading">
    <div id="loader"></div>
  </div>

  <!-- Navbar -->
  <header>

    <nav>
      <!--  -->

      <div class="nav-logo">
        <a href="?page=landing">
          <h1>auth<span>world</span></h1>
        </a>
      </div>

      <ul class="nav-menu">
        <li><a href="?page=landing&#">link</a></li>
        <li><a href="?page=landing&#">link</a></li>
        <li><a href="?page=landing&#">link</a></li>
        <li><a href="?page=landing&#">link</a></li>
      </ul>

      <div class="nav-options">
        <a href="?page=login">Login</a>
        <a href="?page=register">Sign Up</a>
      </div>

      <i data-feather="chevron-down" class="navbar-toggle-btn"></i>

      <!--  -->
    </nav>

  </header>


  <!-- Page -->
  <main>

    <?php

    include("./connect.php");

    $_page = @$_GET['page'];

    switch ($_page) {
        // Landing Page
      case 'landing':
        include("./pages/landing_page/landing.php");
        break;
        // Login
      case 'login':
        include("./pages/user_login/login.php");
        break;
        // Register
      case 'register':
        include("./pages/user_register/register.php");
        break;
        // Default
      default:
        include("./pages/landing_page/landing.php");
    }

    ?>

  </main>

  <!-- Footer -->
  <footer>
    <p class="footer-copyright">&copy;2021 - <a href="https://github.com/matheus-gs">Matheus-gs</a></p>
  </footer>


  <!-- JS -->
  <script src="./js/script.js"></script>
</body>

</html>