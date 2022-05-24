<div class="container">
    <form action="?controller=PaymentMethodController&<?php echo isset($paymentMethod->id) ? "method=atualizar&id={$paymentMethod->id}" : "method=salvar"; ?>" method="post" >
        <div class="card" style="top:40px">
            <div class="card-header">
                <span class="card-title">Metodo de Pagamento</span>
            </div>
            <div class="card-body">
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Nome:</label>
                <input type="text" class="form-control col-sm-8" name="name" id="name" value="<?php
                echo isset($paymentMethod->name) ? $paymentMethod->name : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Descrição:</label>
                <input type="text" class="form-control col-sm-8" name="about" id="about" value="<?php
                echo isset($paymentMethod->about) ? $paymentMethod->about : null;
                ?>" />
            </div>
            <div class="card-footer">
                <input type="hidden" name="id" id="id" value="<?php echo isset($paymentMethod->id) ? $paymentMethod->id : null; ?>" />
                <button class="btn btn-success" type="submit">Salvar</button>
                <button class="btn btn-secondary">Limpar</button>
                <a class="btn btn-danger" href="?controller=PaymentMethodController&method=listar">Cancelar</a>
            </div>
        </div>
    </form>
</div>