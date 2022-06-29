<div class="container">
    <form action="?controller=ReceitasDespesasController&<?php echo isset($receitasDespesas->id) ? "method=atualizar&id={$receitasDespesas->id}" : "method=salvar"; ?>" method="post" >
        <div class="card" style="top:40px">
            <div class="card-header">
                <span class="card-title">Receitas e Despesas</span>
            </div>
            <div class="card-body">
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Tipo:</label>
                <input type="text" class="form-control col-sm-8" name="tipo" id="tipo" value="<?php
                echo isset($receitasDespesas->tipo) ? $receitasDespesas->tipo : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Valor:</label>
                <input type="text" class="form-control col-sm-8" name="valor" id="valor" value="<?php
                echo isset($receitasDespesas->valor) ? $receitasDespesas->valor : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Metodo de Pagamento:</label>
                <input type="text" class="form-control col-sm-8" name="metodo_pagamento" id="metodo_pagamento" value="<?php
                echo isset($receitasDespesas->metodo_pagamento) ? $receitasDespesas->metodo_pagamento : null;
                ?>" />
            </div>
            <div class="card-footer">
                <input type="hidden" name="id" id="id" value="<?php echo isset($receitasDespesas->id) ? $receitasDespesas->id : null; ?>" />
                <button class="btn btn-success" type="submit">Salvar</button>
                <button class="btn btn-secondary">Limpar</button>
                <a class="btn btn-danger" href="?controller=ReceitasDespesasController&method=listar">Cancelar</a>
            </div>
        </div>
    </form>
</div>