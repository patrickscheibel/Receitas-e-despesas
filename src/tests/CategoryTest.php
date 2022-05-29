<?php
use PHPUnit\Framework\TestCase;

final class CategoryTest extends TestCase 
{
    /**
     * Teste para salvar uma nova categoria
     */
    public function testSaveCategory(): void {
        $category        = new Category;
        $category->name  = 'T1';
        $category->about = 'T1';
        $this->assertEquals(true, $category->save());
    }

    /**
     * Teste para atualizar a última categoria cadastrada
     */
    public function testUpdateCategory(): void {
        $category           = Category::findLastById();
        $category->name     = 'T2';
        $category->about    = 'T2';
        $this->assertEquals(true, $category->save());
    }
    
    /**
     * Teste para deletar a última categoria cadastrada
     */
    public function testDeleteCategory(): void {
        $category       = Category::findLastById();
        $this->assertEquals(true, $category->destroy($category->id));
    }
}