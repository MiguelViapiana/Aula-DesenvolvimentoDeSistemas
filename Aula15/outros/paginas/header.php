<?php 

  if(session_id() == '') {
    session_start();
  }

?>

<nav class="navbar">
  <div class="container-fluid bg-dark text-white justify-content-start p-3">
    <a class="nav-link px-2" href="http://localhost/aula-mvc-ou-algo-assim/"> <span class="navbar-brand mb-0 h1 text-white"> <?= $navText ?> </span> </a>
    <a class="nav-link px-2" href="http://localhost/aula-mvc-ou-algo-assim/user/login"><button type="button" class="btn btn-primary">Fazer Login</button></a>
    <a class="nav-link px-2" href="http://localhost/aula-mvc-ou-algo-assim/user/novo"><button type="button" class="btn btn-warning">Criar Conta</button></a>
    <a class="nav-link px-2" href="http://localhost/aula-mvc-ou-algo-assim/lista"><button type="button" class="btn btn-light">Minha Lista</button></a>
    <a class="nav-link px-2" href="http://localhost/aula-mvc-ou-algo-assim/user/logout"><button type="button" class="btn btn-danger">Logout</button></a>
  </div>

</nav>