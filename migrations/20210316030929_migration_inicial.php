<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class MigrationInicial extends AbstractMigration
{
    public function up(): void
    {
        $categories = array(
            array(
                'name'        => 'Teste',
                'about'       => 'Teste',
            ),
        );

        $this->table('category')
        ->addColumn('name', 'string', array('limit' => 255, 'null' => true))
        ->addColumn('about', 'string', array('limit' => 255, 'null' => false))
        ->insert($categories)
        ->save();

        $login = array(
            array(
                'username'        => 'admin',
                'password'       => 'admin',
            ),
        );

        $this->table('login')
        ->addColumn('username', 'string', array('limit' => 255, 'null' => true))
        ->addColumn('password', 'string', array('limit' => 255, 'null' => true))
        ->insert($login)
        ->save();

    }

    public function down(): void
    {
        $this->dropTable('category');
        $this->dropTable('login');
    }
}
