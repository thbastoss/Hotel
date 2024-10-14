<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TelefoneFixture
 */
class TelefoneFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'telefone';
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
                'num_telefone' => 'Lorem ipsum',
                'cliente_id' => 1,
                'funcionario_id' => 1,
            ],
        ];
        parent::init();
    }
}
