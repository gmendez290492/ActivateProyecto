<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tata'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tata form large-9 medium-8 columns content">
    <?= $this->Form->create($tatum) ?>
    <fieldset>
        <legend><?= __('Add Tatum') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
