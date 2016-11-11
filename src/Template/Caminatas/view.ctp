<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Caminata'), ['action' => 'edit', $caminata->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Caminata'), ['action' => 'delete', $caminata->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caminata->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Caminatas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Caminata'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="caminatas view large-9 medium-8 columns content">
    <h3><?= h($caminata->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Dia') ?></th>
            <td><?= h($caminata->dia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mes') ?></th>
            <td><?= h($caminata->mes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($caminata->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pasos') ?></th>
            <td><?= $this->Number->format($caminata->pasos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Semana') ?></th>
            <td><?= $this->Number->format($caminata->semana) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idusuario') ?></th>
            <td><?= $this->Number->format($caminata->idusuario) ?></td>
        </tr>
    </table>
</div>
