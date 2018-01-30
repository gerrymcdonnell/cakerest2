<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AnswersquestionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AnswersquestionsTable Test Case
 */
class AnswersquestionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AnswersquestionsTable
     */
    public $Answersquestions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.answersquestions',
        'app.questions',
        'app.users',
        'app.changelogs',
        'app.myjsontest',
        'app.photos',
        'app.questions_categories',
        'app.questionsanswers',
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
        $config = TableRegistry::exists('Answersquestions') ? [] : ['className' => AnswersquestionsTable::class];
        $this->Answersquestions = TableRegistry::get('Answersquestions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Answersquestions);

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
