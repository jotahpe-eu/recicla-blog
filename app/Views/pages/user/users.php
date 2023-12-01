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
            <div class="row">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Excluir</th>
                    </tr>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <td><?php echo $user['idUser']; ?></td>
                            <td><?php echo $user['name']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><?php echo $user['level']; ?></td>
                            <td><a href="/users/delete/<?php echo $user['idUser'] ?>"><button>Excluir</button></a></td>
                        </tr>
                    <?php endforeach; ?>
                    </table>
            </div>
        </div>
    </body>
</html>
