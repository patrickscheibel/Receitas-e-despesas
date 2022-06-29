<h1>Receitas e Despesas</h1>
<hr>
<body>
    <div class="container">
        <table class="table table-bordered table-striped" style="top:40px;">
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Valor</th>
                    <th>Metodo de Pagamento</th>
                    <th>
                        <a href="?controller=ReceitasDespesasController&method=criar" class="btn btn-success btn-sm">Novo</a>
                        <a href="dashboard.php" class="btn btn-secondary btn-sm">Voltar</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($receitasDespesas) {
                    foreach ($receitasDespesas as $receitasDespesas) {
                        ?>
                        <tr>
                            <td><?php echo $receitasDespesas->tipo; ?></td>
                            <td><?php echo $receitasDespesas->valor; ?></td>
                            <td><?php echo $receitasDespesas->metodo_pagamento; ?></td>
                            <td>
                                <a href="?controller=ReceitasDespesasController&method=editar&id=<?php echo $receitasDespesas->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                                <a href="?controller=ReceitasDespesasController&method=excluir&id=<?php echo $receitasDespesas->id; ?>" class="btn btn-danger btn-sm">Excluir</a>
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