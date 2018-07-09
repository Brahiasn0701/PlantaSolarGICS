<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">Planta Solar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Acerca de</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Creadores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Historico</a>
      </li>
    </ul>
    
    <ul class="navbar-nav navbar-text"> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" id="USER_LOGED" role="button" data-toggle="dropdown" href="#">
          <?php echo $_SESSION['USERS_NAME']; ?><i class="fas fa-user pl-2"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="USER_LOGED">
          <a class="dropdown-item" href="#">Perfil</a>
          <a class="dropdown-item" href="#">Configuraciones</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Cerrar Sesion</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
