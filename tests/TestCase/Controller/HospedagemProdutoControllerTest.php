<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\HospedagemProdutoController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\HospedagemProdutoController Test Case
 *
 * @uses \App\Controller\HospedagemProdutoController
 */
class HospedagemProdutoControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.HospedagemProduto',
        'app.Hospedagem',
        'app.Produto',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\HospedagemProdutoController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\HospedagemProdutoController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\HospedagemProdutoController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\HospedagemProdutoController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\HospedagemProdutoController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
