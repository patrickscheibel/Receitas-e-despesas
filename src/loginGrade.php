<h1>Login</h1>
<hr>
<body>
    <div class="container">
        <table class="table table-bordered table-striped" style="top:40px;">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Senha</th>
                    <th>
                        <a href="?controller=LoginController&method=criar" class="btn btn-success btn-sm">Novo</a>
                        <a href="dashboard.php" class="btn btn-secondary btn-sm">Voltar</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($login) {
                    foreach ($login as $login) {
                        ?>
                        <tr>
                            <td><?php echo $login->username; ?></td>
                            <td><?php echo $login->password; ?></td>
                            <td>
                                <a href="?controller=LoginController&method=editar&id=<?php echo $login->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                                <a href="?controller=LoginController&method=excluir&id=<?php echo $login->id; ?>" class="btn btn-danger btn-sm">Excluir</a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="5">Nenhum registro encontrado</td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>