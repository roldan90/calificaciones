<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#" style="color: #F7819F">
        <span class="fas fa-chalkboard-teacher fa-2x"></span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url(); ?>/inicio" > 
                <span class="fas fa-home"></span> Inicio <span class="sr-only">(current)</span>
            </a>
      </li>
      <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url(); ?>/calificaciones"><span class="far fa-clipboard"></span> Calificaciones </a>
      </li>
</ul>
    <ul class="navbar-nav ">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="..." alt="..." class="img-thumbnail">
           </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#"> <span class="fas fa-user-graduate"></span> nombre de usuario</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>/perfil"><span class="fas fa-user-edit"></span> Editar mi perfil </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><span class="fas fa-sign-out-alt"></span> Salir</a>
        </div>
    </li>
    </ul>

</div>
</nav>
</div>