<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DespesaFixture
 */
class DespesaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'despesa';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'funcionario_id' => 1,
                'produto_id' => 1,
                'valor_gasto' => 1.5,
                'data_lancamento' => '2024-10-01',
            ],
        ];
        parent::init();
    }
}
