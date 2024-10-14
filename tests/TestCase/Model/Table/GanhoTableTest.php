<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GanhoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GanhoTable Test Case
 */
class GanhoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GanhoTable
     */
    protected $Ganho;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Ganho',
        'app.Hospedagem',
        'app.Financeiro',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ganho') ? [] : ['className' => GanhoTable::class];
        $this->Ganho = $this->getTableLocator()->get('Ganho', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ganho);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GanhoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\GanhoTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
