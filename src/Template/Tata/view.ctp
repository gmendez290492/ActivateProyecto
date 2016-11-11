<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tatum'), ['action' => 'edit', $tatum->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tatum'), ['action' => 'delete', $tatum->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tatum->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tata'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tatum'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tata view large-9 medium-8 columns content">
    <h3><?= h($tatum->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($tatum->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tatum->id) ?></td>
        </tr>
    </table>
</div>
