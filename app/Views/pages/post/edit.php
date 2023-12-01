<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
            echo view("partials/home/common/header");
        ?>
    </head>
    <script>
        tinymce.init({
            selector: '#text-editor'
        });
    </script>
    <body>
        <!--navbar-->
        <?php echo view("partials/home/common/navbar"); ?>
        <!--end navbar-->
        <div class="container">
            <div class="mt-5">
                <form action="/post/update/<?php echo $post['idPost'] ?>" method="post">
                    <div class="mb-3">
                        <label for="title" class="form-label">Título</label>
                        <input type="text" name="title" class="form-control" id="title" maxlength="50" pattern="[a-zA-Z0-9\s\-]+" required value="<?php echo $post['title'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Conteúdo</label>
                        <textarea id="default" name="content" class="form-control" id="content" cols="30" rows="10" maxlength="5000" required><?php echo $post['content'] ?></textarea>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
        </div>
    </body>
</html>

<?php echo view("partials/home/common/footer"); ?>
