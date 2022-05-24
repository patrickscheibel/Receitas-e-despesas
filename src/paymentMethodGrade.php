<h1>Metodo de Pagamento</h1>
<hr>
<body>
    <div class="container">
        <table class="table table-bordered table-striped" style="top:40px;">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>descrição</th>
                    <th>
                        <a href="?controller=PaymentMethodController&method=criar" class="btn btn-success btn-sm">Novo</a>
                        <a href="dashboard.php" class="btn btn-secondary btn-sm">Voltar</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($paymentMethod) {
                    foreach ($paymentMethod as $paymentMethod) {
                        ?>
                        <tr>
                            <td><?php echo $paymentMethod->name; ?></td>
                            <td><?php echo $paymentMethod->about; ?></td>
                            <td>
                                <a href="?controller=PaymentMethodController&method=editar&id=<?php echo $paymentMethod->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                                <a href="?controller=PaymentMethodController&method=excluir&id=<?php echo $paymentMethod->id; ?>" class="btn btn-danger btn-sm">Excluir</a>
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