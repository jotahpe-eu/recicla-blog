<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php echo view("partials/home/common/header"); ?>
    </head>
    <body>
        <!--navbar-->
        <?php echo view("partials/home/common/navbar"); ?>
        <!--end navbar-->
        <div class="container">
            <div class="mt-5">
                <h2><?php echo $posts['title'] ?></h2>
                <p><?php echo $posts['content'] ?></p><hr>
                <div class="card-footer text-body-secondary">
                    Enviado por: <?php echo $posts['name'] ?>
            </div>
        </div>
    </body>
</html>
