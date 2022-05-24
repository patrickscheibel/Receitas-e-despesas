<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class MigrationMetodoDePagamento extends AbstractMigration
{
    public function up(): void
    {
        $payment_method = array(
            array(
                'name'        => 'Teste',
                'about'       => 'Teste',
            ),
        );

        $this->table('payment_method')
        ->addColumn('name', 'string', array('limit' => 255, 'null' => false))
        ->addColumn('about', 'string', array('limit' => 255, 'null' => true))
        ->insert($payment_method)
        ->save();

    }

    public function down(): void
    {
        $this->dropTable('payment_method');
    }
}
