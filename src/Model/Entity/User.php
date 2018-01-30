<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $role
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Answersquestion[] $answersquestions
 * @property \App\Model\Entity\Changelog[] $changelogs
 * @property \App\Model\Entity\Myjsontest[] $myjsontest
 * @property \App\Model\Entity\Photo[] $photos
 * @property \App\Model\Entity\Question[] $questions
 * @property \App\Model\Entity\QuestionsCategory[] $questions_categories
 * @property \App\Model\Entity\Questionsanswer[] $questionsanswers
 * @property \App\Model\Entity\Quiz[] $quizzes
 * @property \App\Model\Entity\QuizzesAnswer[] $quizzes_answers
 * @property \App\Model\Entity\QuizzesResult[] $quizzes_results
 * @property \App\Model\Entity\Word[] $words
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'username' => true,
        'password' => true,
        'role' => true,
        'created' => true,
        'modified' => true,
        'answersquestions' => true,
        'changelogs' => true,
        'myjsontest' => true,
        'photos' => true,
        'questions' => true,
        'questions_categories' => true,
        'questionsanswers' => true,
        'quizzes' => true,
        'quizzes_answers' => true,
        'quizzes_results' => true,
        'words' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
