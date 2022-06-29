<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class MigrationReceitasDespesas extends AbstractMigration
{
    public function up(): void
    {
        $receitasDespesas = array(
            array(
                'tipo'                   => 'Receita',
                'valor'                  => '100',
                'metodo_pagamento'       => 'Debito',
            ),
        );

        $this->table('receitas_despesas')
        ->addColumn('tipo', 'string', array('limit' => 255, 'null' => true))
        ->addColumn('valor', 'string', array('limit' => 255, 'null' => true))
        ->addColumn('metodo_pagamento', 'string', array('limit' => 255, 'null' => true))
        ->insert($receitasDespesas)
        ->save();
    }

    public function down(): void
    {
        $this->dropTable('receitas_despesas');
    }
}
