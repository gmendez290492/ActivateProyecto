<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tatum'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tata index large-9 medium-8 columns content">
    <h3><?= __('Tata') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tata as $tatum): ?>
            <tr>
                <td><?= $this->Number->format($tatum->id) ?></td>
                <td><?= h($tatum->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tatum->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tatum->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tatum->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tatum->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
