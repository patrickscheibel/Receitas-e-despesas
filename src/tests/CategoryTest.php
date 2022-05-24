<?php
use PHPUnit\Framework\TestCase;

final class CategoryTest extends TestCase {
    public function testSaveCategory(): void {
        $category        = new Category;
        $category->name  = 'T1';
        $category->about = 'T1';
        $this->assertEquals(true, $category->save());
    }

    public function testUpdateCategory(): void {
        $category           = Category::findLastById();
        $category->name     = 'T2';
        $category->about    = 'T2';
        $this->assertEquals(true, $category->save());
    }

    public function testDeleteCategory(): void {
        $category       = Category::findLastById();
        $this->assertEquals(true, $category->destroy($category->id));
    }

    public function testNotFindCategory(): void {
        $category           = Category::find(10);
        $this->assertEquals(false, $category != null);
    }
}
