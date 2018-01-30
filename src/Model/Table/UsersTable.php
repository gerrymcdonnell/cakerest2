<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\AnswersquestionsTable|\Cake\ORM\Association\HasMany $Answersquestions
 * @property \App\Model\Table\ChangelogsTable|\Cake\ORM\Association\HasMany $Changelogs
 * @property \App\Model\Table\MyjsontestTable|\Cake\ORM\Association\HasMany $Myjsontest
 * @property \App\Model\Table\PhotosTable|\Cake\ORM\Association\HasMany $Photos
 * @property \App\Model\Table\QuestionsTable|\Cake\ORM\Association\HasMany $Questions
 * @property \App\Model\Table\QuestionsCategoriesTable|\Cake\ORM\Association\HasMany $QuestionsCategories
 * @property \App\Model\Table\QuestionsanswersTable|\Cake\ORM\Association\HasMany $Questionsanswers
 * @property \App\Model\Table\QuizzesTable|\Cake\ORM\Association\HasMany $Quizzes
 * @property \App\Model\Table\QuizzesAnswersTable|\Cake\ORM\Association\HasMany $QuizzesAnswers
 * @property \App\Model\Table\QuizzesResultsTable|\Cake\ORM\Association\HasMany $QuizzesResults
 * @property \App\Model\Table\WordsTable|\Cake\ORM\Association\HasMany $Words
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Answersquestions', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Changelogs', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Myjsontest', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Photos', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Questions', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('QuestionsCategories', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Questionsanswers', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Quizzes', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('QuizzesAnswers', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('QuizzesResults', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Words', [
            'foreignKey' => 'user_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->scalar('role')
            ->maxLength('role', 10)
            ->requirePresence('role', 'create')
            ->notEmpty('role');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }
}
