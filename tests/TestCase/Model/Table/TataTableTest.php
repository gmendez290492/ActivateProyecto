<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TataTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TataTable Test Case
 */
class TataTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TataTable
     */
    public $Tata;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tata'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tata') ? [] : ['className' => 'App\Model\Table\TataTable'];
        $this->Tata = TableRegistry::get('Tata', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tata);

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
