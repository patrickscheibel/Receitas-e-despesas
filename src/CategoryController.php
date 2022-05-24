<?php 
class CategoryController extends Controller {
    /**
     * Lista os categoria
     */
    public function listar() {
        $category = Category::all();
        return $this->view('categoryGrade', ['category' => $category]);
    }
 
    /**
     * Mostrar formulario para criar um novo categoria
     */
    public function criar() {
        return $this->view('categoryForm');
    }
 
    /**
     * Mostrar formulário para editar um categoria
     */
    public function editar($dados) {
        $id      = (int) $dados['id'];
        $category = Category::find($id);
 
        return $this->view('categoryForm', ['category' => $category]);
    }
 
    /**
     * Salvar o categoria submetido pelo formulário
     */
    public function salvar() {
        $category           = new Category;
        $category->name     = $this->request->name;
        $category->about = $this->request->about;
        if ($category->save()) {
            return $this->listar();
        }
    }
 
    /**
     * Atualizar o category conforme dados submetidos
     */
    public function atualizar($dados) {
        $id                = (int) $dados['id'];
        $category           = Category::find($id);
        $category->name     = $this->request->name;
        $category->about = $this->request->about;
        $category->save();
 
        return $this->listar();
    }
 
    /**
     * Apagar um categoria conforme o id informado
     */
    public function excluir($dados) {
        $id      = (int) $dados['id'];
        $category = Category::destroy($id);
        return $this->listar();
    }
}
?>