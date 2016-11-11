<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Caminata'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="caminatas index large-9 medium-8 columns content">
    <h3><?= __('Caminatas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pasos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('semana') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idusuario') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($caminatas as $caminata): ?>
            <tr>
                <td><?= $this->Number->format($caminata->id) ?></td>
                <td><?= $this->Number->format($caminata->pasos) ?></td>
                <td><?= h($caminata->dia) ?></td>
                <td><?= h($caminata->mes) ?></td>
                <td><?= $this->Number->format($caminata->semana) ?></td>
                <td><?= $this->Number->format($caminata->idusuario) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $caminata->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $caminata->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $caminata->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caminata->id)]) ?>
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
