<?php 
class PaymentMethodController extends Controller {
    /**
     * Lista os metodos de pagamento
     */
    public function listar() {
        $paymentMethod = PaymentMethod::all();
        return $this->view('paymentMethodGrade', ['paymentMethod' => $paymentMethod]);
    }
 
    /**
     * Mostrar formulario para criar um novo mentodo de pagamento
     */
    public function criar() {
        return $this->view('paymentMethodForm');
    }
 
    /**
     * Mostrar formulário para editar um metodo de pagamento
     */
    public function editar($dados) {
        $id      = (int) $dados['id'];
        $paymentMethod = PaymentMethod::find($id);
 
        return $this->view('paymentMethodForm', ['paymentMethod' => $paymentMethod]);
    }
 
    /**
     * Salvar o metodo de pagamento submetido pelo formulário
     */
    public function salvar() {
        $paymentMethod           = new PaymentMethod;
        $paymentMethod->name     = $this->request->name;
        $paymentMethod->about = $this->request->about;
        if ($paymentMethod->save()) {
            return $this->listar();
        }
    }
 
    /**
     * Atualizar o metodo de pagamento conforme dados submetidos
     */
    public function atualizar($dados) {
        $id                = (int) $dados['id'];
        $paymentMethod           = PaymentMethod::find($id);
        $paymentMethod->name     = $this->request->name;
        $paymentMethod->about = $this->request->about;
        $paymentMethod->save();
 
        return $this->listar();
    }
 
    /**
     * Apagar um metodo de pagamento conforme o id informado
     */
    public function excluir($dados) {
        $id      = (int) $dados['id'];
        $paymentMethod = PaymentMethod::destroy($id);
        return $this->listar();
    }
}
?>