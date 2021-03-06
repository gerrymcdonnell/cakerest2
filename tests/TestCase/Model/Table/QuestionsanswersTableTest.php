<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuestionsanswersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuestionsanswersTable Test Case
 */
class QuestionsanswersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuestionsanswersTable
     */
    public $Questionsanswers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.questionsanswers',
        'app.questions',
        'app.users',
        'app.answersquestions',
        'app.changelogs',
        'app.myjsontest',
        'app.photos',
        'app.questions_categories',
        'app.quizzes',
        'app.quizzes_answers',
        'app.quizzes_results',
        'app.words'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Questionsanswers') ? [] : ['className' => QuestionsanswersTable::class];
        $this->Questionsanswers = TableRegistry::get('Questionsanswers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Questionsanswers);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
