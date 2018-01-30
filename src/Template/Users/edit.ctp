<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Answersquestions'), ['controller' => 'Answersquestions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Answersquestion'), ['controller' => 'Answersquestions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Changelogs'), ['controller' => 'Changelogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Changelog'), ['controller' => 'Changelogs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Myjsontest'), ['controller' => 'Myjsontest', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Myjsontest'), ['controller' => 'Myjsontest', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions Categories'), ['controller' => 'QuestionsCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questions Category'), ['controller' => 'QuestionsCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questionsanswers'), ['controller' => 'Questionsanswers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questionsanswer'), ['controller' => 'Questionsanswers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quizzes'), ['controller' => 'Quizzes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quiz'), ['controller' => 'Quizzes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quizzes Answers'), ['controller' => 'QuizzesAnswers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quizzes Answer'), ['controller' => 'QuizzesAnswers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quizzes Results'), ['controller' => 'QuizzesResults', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quizzes Result'), ['controller' => 'QuizzesResults', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Words'), ['controller' => 'Words', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Word'), ['controller' => 'Words', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('role');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
