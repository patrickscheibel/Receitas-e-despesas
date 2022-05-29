<?php
use PHPUnit\Framework\TestCase;

final class LoginTest extends TestCase 
{
    /**
     * Teste para salvar um novo login
     */
    public function testSaveLogin(): void {
        $login        = new Login;
        $login->username = 'T1';
        $login->password = 'T1';
        $this->assertEquals(true, $login->save());
    }

    /**
     * Teste para atualizar o último login cadastrado
     */
    public function testUpdateLogin(): void {
        $login           = Login::findLastById();
        $login->username = 'T2';
        $login->password = 'T2';
        $this->assertEquals(true, $login->save());
    }

    /**
     * Teste para deletar o último login cadastrado
     */
    public function testDeleteLogin(): void {
        $login       = Login::findLastById();
        $this->assertEquals(true, $login->destroy($login->id));
    }

    /**
     * Teste para validar se existe um login de admin cadastrado
     */
    public function testLoginAdmin(): void {
        $login           = Login::testLogin("admin", "admin");
        $this->assertEquals(true, $login != null);
    }
}