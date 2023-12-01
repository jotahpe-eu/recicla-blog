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
                <form action="/post/store" method="post">
                    <div class="mb-3">
                        <label for="title" class="form-label">Título</label>
                        <input type="text" name="title" class="form-control" id="title" maxlength="50" pattern="[a-zA-Z0-9\s\-]+" required>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Conteúdo</label>
                        <textarea id="default" name="content" class="form-control content" cols="30" rows="10" maxlength="5000" required> </textarea>
                    </div><br>
                    <button type="submit" class="btn btn-primary">Criar</button>
                </form>
            </div>
        </div>
    </body>
</html>

<?php echo view("partials/home/common/footer"); ?>
