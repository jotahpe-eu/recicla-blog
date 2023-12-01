<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
            echo view("partials/home/common/header");
        ?>
    </head>
    <body>
        <!--navbar-->
        <?php echo view("partials/home/common/navbar"); ?>
        <!--end navbar-->
        <div class="container">
            <div class="mt-5">
            <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
            <div class="main-body">
                    <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4><?php echo $user['name']; ?></h4>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nome</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $user['name']; ?>
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $user['email']; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Senha</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    ********
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nível</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $user['level']; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Editar
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Usuário</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/users/update" method="post">
                                                    <div class="mb-3">
                                                        <label for="name" class="col-form-label">Nome:</label>
                                                        <input type="text" name="name" class="form-control" id="name">
                                                        <label for="email" class="col-form-label">Email:</label>
                                                        <input type="email" name="email" class="form-control" id="email">
                                                        <label for="password" class="col-form-label">Senha:</label>
                                                        <input type="password" name="password" class="form-control" id="password">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-primary">Editar</button>
                                                    </div>
                                                </form>
                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
