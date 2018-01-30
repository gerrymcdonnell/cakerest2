<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Answersquestion $answersquestion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $answersquestion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $answersquestion->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Answersquestions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="answersquestions form large-9 medium-8 columns content">
    <?= $this->Form->create($answersquestion) ?>
    <fieldset>
        <legend><?= __('Edit Answersquestion') ?></legend>
        <?php
            echo $this->Form->control('question_id', ['options' => $questions]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('answerindex');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
