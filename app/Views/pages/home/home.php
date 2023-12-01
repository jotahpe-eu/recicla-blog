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
                <a href="post/new"><button class="btn btn-primary">Novo</button></a><br><br>
                <?php foreach($posts as $post): ?>
                    <a href="/post/<?php echo $post['idPost']; ?>" class="card mb-4 selectable-card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $post['title'] ?></h5>
                            <p class="card-text" ><?php echo mb_strimwidth(strip_tags($post['content']), 0, 500, "...") ?></p>
                            <!-- mb_strimwidth("Hello World", 0, 10, "..."); -->
                        </div>
                        <div class="card-footer text-body-secondary">
                            Enviado por: <?php echo $post['name'] ?>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>
