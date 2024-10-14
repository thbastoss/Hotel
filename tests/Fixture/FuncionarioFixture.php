<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FuncionarioFixture
 */
class FuncionarioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'funcionario';
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
                'nome' => 'Lorem ipsum dolor sit amet',
                'data_nascimento' => '2024-10-01',
                'endereco' => 'Lorem ipsum dolor sit amet',
                'funcao' => 'Lorem ipsum dolor sit a',
                'salario' => 1.5,
                'avaliacao' => 'Lorem ipsum dolor sit amet',
                'data_cadastro' => '2024-10-01 00:23:07',
                'cpf' => 'Lorem ips',
            ],
        ];
        parent::init();
    }
}
