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
            <form action="<?php echo base_url(); ?>/Auth/store" method="post">
                <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
                <h1 class="h3 mb-3 fw-normal">Por-favor, registre-se!</h1>
                <div class="form-floating">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
                    <label for="name">Nome</label>
                </div><br>
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    <label for="email">Endereço de e-mail</label>
                </div><br>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <label for="password">Senha</label>
                </div><br>
                <button class="btn btn-primary w-100 py-2" type="submit">Registrar</button>
                <p class="mt-5 mb-3 text-body-secondary">&copy; 2023</p>
            </form>
        </main>
    </body>
</html>
