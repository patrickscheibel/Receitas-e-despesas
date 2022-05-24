<h1>Categorias</h1>
<hr>
<body>
    <div class="container">
        <table class="table table-bordered table-striped" style="top:40px;">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>
                        <a href="?controller=CategoryController&method=criar" class="btn btn-success btn-sm">Novo</a>
                        <a href="dashboard.php" class="btn btn-secondary btn-sm">Voltar</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($category) {
                    foreach ($category as $category) {
                        ?>
                        <tr>
                            <td><?php echo $category->name; ?></td>
                            <td><?php echo $category->about; ?></td>
                            <td>
                                <a href="?controller=CategoryController&method=editar&id=<?php echo $category->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                                <a href="?controller=CategoryController&method=excluir&id=<?php echo $category->id; ?>" class="btn btn-danger btn-sm">Excluir</a>
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