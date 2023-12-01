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
                <?php foreach($posts as $post): ?>
                    <div class="card text-center mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $post['title'] ?></h5>
                            <p class="card-text"><?php echo mb_strimwidth(strip_tags($post['content']), 0, 100, "...") ?></p>
                            <?php echo anchor(base_url('post/edit/'.$post['idPost']), 'Editar') ?><br>
                            <?php echo anchor(base_url('post/delete/'.$post['idPost']), 'Deletar') ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>
