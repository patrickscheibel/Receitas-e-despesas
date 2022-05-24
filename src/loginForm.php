<div class="container">
    <form action="?controller=LoginController&<?php echo isset($login->id) ? "method=atualizar&id={$login->id}" : "method=salvar"; ?>" method="post" >
        <div class="card" style="top:40px">
            <div class="card-header">
                <span class="card-title">Login</span>
            </div>
            <div class="card-body">
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Usuario:</label>
                <input type="text" class="form-control col-sm-8" name="username" id="username" value="<?php
                echo isset($login->username) ? $login->username : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Senha:</label>
                <input type="text" class="form-control col-sm-8" name="password" id="password" value="<?php
                echo isset($login->password) ? $login->password : null;
                ?>" />
            </div>
            <div class="card-footer">
                <input type="hidden" name="id" id="id" value="<?php echo isset($login->id) ? $login->id : null; ?>" />
                <button class="btn btn-success" type="submit">Salvar</button>
                <button class="btn btn-secondary">Limpar</button>
                <a class="btn btn-danger" href="?controller=LoginController&method=listar">Cancelar</a>
            </div>
        </div>
    </form>
</div>