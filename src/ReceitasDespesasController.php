<?php 
class ReceitasDespesasController extends Controller {
    /**
     * Lista as receitasDespesas
     */
    public function listar() {
        $receitasDespesas = ReceitasDespesas::all();
        return $this->view('receitasDespesasGrade', ['receitasDespesas' => $receitasDespesas]);
    }
 
    /**
     * Mostrar formulario para criar uma nova receitasDespesas
     */
    public function criar() {
        return $this->view('receitasDespesasForm');
    }
 
    /**
     * Mostrar formulário para editar um receitasDespesas
     */
    public function editar($dados) {
        $id               = (int) $dados['id'];
        $receitasDespesas = ReceitasDespesas::find($id);
 
        return $this->view('receitasDespesasForm', ['receitasDespesas' => $receitasDespesas]);
    }
 
    /**
     * Salvar o receitasDespesas submetido pelo formulário
     */
    public function salvar() {
        $receitasDespesas                   = new ReceitasDespesas;
        $receitasDespesas->tipo             = $this->request->tipo;
        $receitasDespesas->valor            = $this->request->valor;
        $receitasDespesas->metodo_pagamento = $this->request->metodo_pagamento;
        if ($receitasDespesas->save()) {
            return $this->listar();
        }
    }
 
    /**
     * Atualizar o loreceitasDespesasgin conforme dados submetidos
     */
    public function atualizar($dados) {
        $id                                 = (int) $dados['id'];
        $receitasDespesas                   = ReceitasDespesas::find($id);
        $receitasDespesas->tipo             = $this->request->tipo;
        $receitasDespesas->valor            = $this->request->valor;
        $receitasDespesas->metodo_pagamento = $this->request->metodo_pagamento;
        $receitasDespesas->save();
 
        return $this->listar();
    }
 
    /**
     * Apagar um receitasDespesas conforme o id informado
     */
    public function excluir($dados) {
        $id               = (int) $dados['id'];
        $receitasDespesas = ReceitasDespesas::destroy($id);
        return $this->listar();
    }
}
?>