<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Style BR</title>

  <!-- JS -->
  <script src="./js/script.js"></script>
  <script src="./js/bootstrap.min.js"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <!-- link login.css -->
  <link rel="stylesheet" href="./css/login.css">
</head>

<body class="body">

  <!-- NavBar -->

  <!-- Peimeira Linha Navabr -->
  <div class="nav d-flex justify-content-between container-fluid">
    <a class="navbar-brand align-self-center" href="#">
      <img class="logo" src="img\logo.png" alt="Bootstrap" width="30" height="24">
    </a>

    <!-- meio do header -->
    <div class="d-flex align-items-end flex-column meio-nav">
      <div class="container-fluid">
        <!-- barra de pesquisa -->
        <ul class="nav justify-content-center">

          <li class="nav-item">
            <form class="d-flex" role="search">
              <input class="form-control me-2 barra-pesquisa" type="search" placeholder="Pesquisar" aria-label="Search">
              <button class="btn btn-outline-success btn-pesquisa" type="submit">Pesquisar</button>
            </form>
          </li>
        </ul>
        <!-- Fim da Barra de Pesquisa -->
      </div>

      <div class="container-fluid">
        <!-- cmc categorias -->
        <div class="d-flex justify-content-center">
          <ul class="navbar-nav  flex-row ">
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Kits</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Feminino</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Plus Size</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Sapatos</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Lingerie</a>
            </li>
          </ul>
        </div>
        <!-- fim categorias -->
      </div>
    </div>
    <!-- fim do meio do header -->

    <ul class="navbar-nav flex-row me-2 p-2 align-self-center">
      <li class="nav-item me-3">
        <a href="#"><img src="./img/carrinho.png" class="img-nav" alt="carrinho"></a>
      </li>
      <li class="nav-item me-3">
        <a href="./views/login.php"><img src="./img/profile.png" class="img-nav" alt="perfil"></a>
      </li>

    </ul>
  </div>
  <!-- fim header -->