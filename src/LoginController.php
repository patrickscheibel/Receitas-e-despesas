<?php 
class LoginController extends Controller {
    /**
     * Lista os login
     */
    public function listar() {
        $login = Login::all();
        return $this->view('loginGrade', ['login' => $login]);
    }
 
    /**
     * Mostrar formulario para criar um novo login
     */
    public function criar() {
        return $this->view('loginForm');
    }
 
    /**
     * Mostrar formulário para editar um login
     */
    public function editar($dados) {
        $id      = (int) $dados['id'];
        $login = Login::find($id);
 
        return $this->view('loginForm', ['login' => $login]);
    }
 
    /**
     * Salvar o login submetido pelo formulário
     */
    public function salvar() {
        $login           = new Login;
        $login->username     = $this->request->username;
        $login->password = $this->request->password;
        if ($login->save()) {
            return $this->listar();
        }
    }
 
    /**
     * Atualizar o login conforme dados submetidos
     */
    public function atualizar($dados) {
        $id                = (int) $dados['id'];
        $login           = Login::find($id);
        $login->username     = $this->request->username;
        $login->password = $this->request->password;
        $login->save();
 
        return $this->listar();
    }
 
    /**
     * Apagar um login conforme o id informado
     */
    public function excluir($dados) {
        $id      = (int) $dados['id'];
        $login = Login::destroy($id);
        return $this->listar();
    }
}
?>