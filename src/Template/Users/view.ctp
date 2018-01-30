<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Answersquestions'), ['controller' => 'Answersquestions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Answersquestion'), ['controller' => 'Answersquestions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Changelogs'), ['controller' => 'Changelogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Changelog'), ['controller' => 'Changelogs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Myjsontest'), ['controller' => 'Myjsontest', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Myjsontest'), ['controller' => 'Myjsontest', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions Categories'), ['controller' => 'QuestionsCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questions Category'), ['controller' => 'QuestionsCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questionsanswers'), ['controller' => 'Questionsanswers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questionsanswer'), ['controller' => 'Questionsanswers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quizzes'), ['controller' => 'Quizzes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quiz'), ['controller' => 'Quizzes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quizzes Answers'), ['controller' => 'QuizzesAnswers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quizzes Answer'), ['controller' => 'QuizzesAnswers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quizzes Results'), ['controller' => 'QuizzesResults', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quizzes Result'), ['controller' => 'QuizzesResults', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Words'), ['controller' => 'Words', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Word'), ['controller' => 'Words', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Answersquestions') ?></h4>
        <?php if (!empty($user->answersquestions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Question Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Answerindex') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->answersquestions as $answersquestions): ?>
            <tr>
                <td><?= h($answersquestions->id) ?></td>
                <td><?= h($answersquestions->question_id) ?></td>
                <td><?= h($answersquestions->user_id) ?></td>
                <td><?= h($answersquestions->answerindex) ?></td>
                <td><?= h($answersquestions->created) ?></td>
                <td><?= h($answersquestions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Answersquestions', 'action' => 'view', $answersquestions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Answersquestions', 'action' => 'edit', $answersquestions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Answersquestions', 'action' => 'delete', $answersquestions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answersquestions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Changelogs') ?></h4>
        <?php if (!empty($user->changelogs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Changelog Category Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Priority') ?></th>
                <th scope="col"><?= __('Url') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->changelogs as $changelogs): ?>
            <tr>
                <td><?= h($changelogs->id) ?></td>
                <td><?= h($changelogs->title) ?></td>
                <td><?= h($changelogs->changelog_category_id) ?></td>
                <td><?= h($changelogs->description) ?></td>
                <td><?= h($changelogs->priority) ?></td>
                <td><?= h($changelogs->url) ?></td>
                <td><?= h($changelogs->status) ?></td>
                <td><?= h($changelogs->user_id) ?></td>
                <td><?= h($changelogs->created) ?></td>
                <td><?= h($changelogs->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Changelogs', 'action' => 'view', $changelogs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Changelogs', 'action' => 'edit', $changelogs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Changelogs', 'action' => 'delete', $changelogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $changelogs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Myjsontest') ?></h4>
        <?php if (!empty($user->myjsontest)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Question Id') ?></th>
                <th scope="col"><?= __('Answerindex') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->myjsontest as $myjsontest): ?>
            <tr>
                <td><?= h($myjsontest->id) ?></td>
                <td><?= h($myjsontest->title) ?></td>
                <td><?= h($myjsontest->user_id) ?></td>
                <td><?= h($myjsontest->question_id) ?></td>
                <td><?= h($myjsontest->answerindex) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Myjsontest', 'action' => 'view', $myjsontest->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Myjsontest', 'action' => 'edit', $myjsontest->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Myjsontest', 'action' => 'delete', $myjsontest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $myjsontest->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Photos') ?></h4>
        <?php if (!empty($user->photos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Photo Dir') ?></th>
                <th scope="col"><?= __('Photo Size') ?></th>
                <th scope="col"><?= __('Photo Type') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->photos as $photos): ?>
            <tr>
                <td><?= h($photos->id) ?></td>
                <td><?= h($photos->user_id) ?></td>
                <td><?= h($photos->photo) ?></td>
                <td><?= h($photos->photo_dir) ?></td>
                <td><?= h($photos->photo_size) ?></td>
                <td><?= h($photos->photo_type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Photos', 'action' => 'view', $photos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Photos', 'action' => 'edit', $photos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Photos', 'action' => 'delete', $photos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Questions') ?></h4>
        <?php if (!empty($user->questions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Question') ?></th>
                <th scope="col"><?= __('Ans1') ?></th>
                <th scope="col"><?= __('Ans2') ?></th>
                <th scope="col"><?= __('Ans3') ?></th>
                <th scope="col"><?= __('Ans4') ?></th>
                <th scope="col"><?= __('Correctans') ?></th>
                <th scope="col"><?= __('Difficulty') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Questions Categories Id') ?></th>
                <th scope="col"><?= __('Questionstypes Id') ?></th>
                <th scope="col"><?= __('Flag') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Photo Dir') ?></th>
                <th scope="col"><?= __('Photo Size') ?></th>
                <th scope="col"><?= __('Photo Type') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->questions as $questions): ?>
            <tr>
                <td><?= h($questions->id) ?></td>
                <td><?= h($questions->question) ?></td>
                <td><?= h($questions->ans1) ?></td>
                <td><?= h($questions->ans2) ?></td>
                <td><?= h($questions->ans3) ?></td>
                <td><?= h($questions->ans4) ?></td>
                <td><?= h($questions->correctans) ?></td>
                <td><?= h($questions->difficulty) ?></td>
                <td><?= h($questions->user_id) ?></td>
                <td><?= h($questions->questions_categories_id) ?></td>
                <td><?= h($questions->questionstypes_id) ?></td>
                <td><?= h($questions->flag) ?></td>
                <td><?= h($questions->photo) ?></td>
                <td><?= h($questions->photo_dir) ?></td>
                <td><?= h($questions->photo_size) ?></td>
                <td><?= h($questions->photo_type) ?></td>
                <td><?= h($questions->created) ?></td>
                <td><?= h($questions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Questions', 'action' => 'view', $questions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Questions', 'action' => 'edit', $questions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Questions', 'action' => 'delete', $questions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Questions Categories') ?></h4>
        <?php if (!empty($user->questions_categories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->questions_categories as $questionsCategories): ?>
            <tr>
                <td><?= h($questionsCategories->id) ?></td>
                <td><?= h($questionsCategories->title) ?></td>
                <td><?= h($questionsCategories->user_id) ?></td>
                <td><?= h($questionsCategories->created) ?></td>
                <td><?= h($questionsCategories->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'QuestionsCategories', 'action' => 'view', $questionsCategories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'QuestionsCategories', 'action' => 'edit', $questionsCategories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'QuestionsCategories', 'action' => 'delete', $questionsCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionsCategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Questionsanswers') ?></h4>
        <?php if (!empty($user->questionsanswers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Question Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Answerindex') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->questionsanswers as $questionsanswers): ?>
            <tr>
                <td><?= h($questionsanswers->id) ?></td>
                <td><?= h($questionsanswers->question_id) ?></td>
                <td><?= h($questionsanswers->user_id) ?></td>
                <td><?= h($questionsanswers->answerindex) ?></td>
                <td><?= h($questionsanswers->created) ?></td>
                <td><?= h($questionsanswers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Questionsanswers', 'action' => 'view', $questionsanswers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Questionsanswers', 'action' => 'edit', $questionsanswers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Questionsanswers', 'action' => 'delete', $questionsanswers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionsanswers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Quizzes') ?></h4>
        <?php if (!empty($user->quizzes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->quizzes as $quizzes): ?>
            <tr>
                <td><?= h($quizzes->id) ?></td>
                <td><?= h($quizzes->title) ?></td>
                <td><?= h($quizzes->user_id) ?></td>
                <td><?= h($quizzes->created) ?></td>
                <td><?= h($quizzes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Quizzes', 'action' => 'view', $quizzes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Quizzes', 'action' => 'edit', $quizzes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Quizzes', 'action' => 'delete', $quizzes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quizzes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Quizzes Answers') ?></h4>
        <?php if (!empty($user->quizzes_answers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Quiz Id') ?></th>
                <th scope="col"><?= __('Question Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Answerindex') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->quizzes_answers as $quizzesAnswers): ?>
            <tr>
                <td><?= h($quizzesAnswers->id) ?></td>
                <td><?= h($quizzesAnswers->quiz_id) ?></td>
                <td><?= h($quizzesAnswers->question_id) ?></td>
                <td><?= h($quizzesAnswers->user_id) ?></td>
                <td><?= h($quizzesAnswers->answerindex) ?></td>
                <td><?= h($quizzesAnswers->created) ?></td>
                <td><?= h($quizzesAnswers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'QuizzesAnswers', 'action' => 'view', $quizzesAnswers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'QuizzesAnswers', 'action' => 'edit', $quizzesAnswers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'QuizzesAnswers', 'action' => 'delete', $quizzesAnswers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quizzesAnswers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Quizzes Results') ?></h4>
        <?php if (!empty($user->quizzes_results)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Quiz Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Started') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->quizzes_results as $quizzesResults): ?>
            <tr>
                <td><?= h($quizzesResults->quiz_id) ?></td>
                <td><?= h($quizzesResults->user_id) ?></td>
                <td><?= h($quizzesResults->created) ?></td>
                <td><?= h($quizzesResults->modified) ?></td>
                <td><?= h($quizzesResults->started) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'QuizzesResults', 'action' => 'view', $quizzesResults->quiz_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'QuizzesResults', 'action' => 'edit', $quizzesResults->quiz_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'QuizzesResults', 'action' => 'delete', $quizzesResults->quiz_id], ['confirm' => __('Are you sure you want to delete # {0}?', $quizzesResults->quiz_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Words') ?></h4>
        <?php if (!empty($user->words)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Word') ?></th>
                <th scope="col"><?= __('Word Syllables') ?></th>
                <th scope="col"><?= __('Picture') ?></th>
                <th scope="col"><?= __('Picture Dir') ?></th>
                <th scope="col"><?= __('Soundfile') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->words as $words): ?>
            <tr>
                <td><?= h($words->id) ?></td>
                <td><?= h($words->word) ?></td>
                <td><?= h($words->word_syllables) ?></td>
                <td><?= h($words->picture) ?></td>
                <td><?= h($words->picture_dir) ?></td>
                <td><?= h($words->soundfile) ?></td>
                <td><?= h($words->user_id) ?></td>
                <td><?= h($words->created) ?></td>
                <td><?= h($words->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Words', 'action' => 'view', $words->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Words', 'action' => 'edit', $words->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Words', 'action' => 'delete', $words->id], ['confirm' => __('Are you sure you want to delete # {0}?', $words->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
