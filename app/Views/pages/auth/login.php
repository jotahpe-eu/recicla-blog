<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
    <head>
        <?php echo view("partials/home/common/header"); ?>
        <style>
            html, body {
                height: 100%;
            }

            .form-signin {
                max-width: 330px;
                padding: 1rem;
            }

            .form-signin .form-floating:focus-within {
                z-index: 2;
            }

            .form-signin input[type="email"] {
                margin-bottom: -1px;
                border-bottom-right-radius: 0;
                border-bottom-left-radius: 0;
            }

            .form-signin input[type="password"] {
                margin-bottom: 10px;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
            }
        </style>
    </head>
    <body class="d-flex align-items-center py-4 ">
        <main class="form-signin w-100 m-auto">
        <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
            <form action="<?php echo base_url(); ?>/Auth/loginAuth" method="post">
                <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
                <h1 class="h3 mb-3 fw-normal">Por-favor, logue-se!</h1>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                    <label for="floatingInput">Endereço de e-mail</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                    <label for="floatingPassword">Senha</label>
                </div>
                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">Lembrar-me</label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button><br><br>
            </form>
            <a href="/register"><button class="btn btn-outline-warning w-100 py-2">Registrar</button></a>
            <p class="mt-4 mb-3 text-body-secondary">&copy; 2023</p>
        </main>
    </body>
</html>
