<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EstoqueFixture
 */
class EstoqueFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'estoque';
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
                'produto_id' => 1,
                'funcionario_id' => 1,
                'quantidade' => 1,
                'data_baixa' => '2024-10-01 00:25:19',
                'data_lancamento' => '2024-10-01 00:25:19',
                'num_fiscal' => 'Lorem ipsum dolor sit amet',
                'tipo_operacao' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
