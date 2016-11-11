<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CaminatasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CaminatasTable Test Case
 */
class CaminatasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CaminatasTable
     */
    public $Caminatas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.caminatas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Caminatas') ? [] : ['className' => 'App\Model\Table\CaminatasTable'];
        $this->Caminatas = TableRegistry::get('Caminatas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Caminatas);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
