<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Questionsanswer[]|\Cake\Collection\CollectionInterface $questionsanswers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Questionsanswer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questionsanswers index large-9 medium-8 columns content">
    <h3><?= __('Questionsanswers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('question_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('answerindex') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questionsanswers as $questionsanswer): ?>
            <tr>
                <td><?= $this->Number->format($questionsanswer->id) ?></td>
                <td><?= $questionsanswer->has('question') ? $this->Html->link($questionsanswer->question->id, ['controller' => 'Questions', 'action' => 'view', $questionsanswer->question->id]) : '' ?></td>
                <td><?= $questionsanswer->has('user') ? $this->Html->link($questionsanswer->user->id, ['controller' => 'Users', 'action' => 'view', $questionsanswer->user->id]) : '' ?></td>
                <td><?= $this->Number->format($questionsanswer->answerindex) ?></td>
                <td><?= h($questionsanswer->created) ?></td>
                <td><?= h($questionsanswer->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $questionsanswer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $questionsanswer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $questionsanswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionsanswer->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
