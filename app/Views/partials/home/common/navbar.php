  <header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <!-- <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a> -->

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-secondary">Início</a></li>
          <li><a href="/profile" class="nav-link px-2 text-white">Publicações</a></li>
          <li><a href="/myprofile" class="nav-link px-2 text-white">Meu Perfil</a></li>
          <?php
            //verifica level do usuário
            if (session()->get('level') == 2) {
                echo '<li><a href="/users" class="nav-link px-2 text-white">Usuários</a></li>';
            }
          ?>
          <li><a href="/about" class="nav-link px-2 text-white">Sobre</a></li>
        </ul>

        <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark" placeholder="Pesquisar..." aria-label="Search">
        </form> -->

        <div class="text-end">
            <?php
                if (session()->get('isLoggedIn')) {
                    echo '<a href="/logout" class="btn btn-warning">Logout</a>';
                }else{
                    echo '<a href="/login" class="btn btn-outline-light me-2">Login</a>';
                    echo '<a href="/register" class="btn btn-warning">Sign-up</a>';
                }
            ?>
        </div>
      </div>
    </div>
  </header>
