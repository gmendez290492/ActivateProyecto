<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Caminatas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="caminatas form large-9 medium-8 columns content">
    <?= $this->Form->create($caminata) ?>
    <fieldset>
        <legend><?= __('Add Caminata') ?></legend>
        <?php
            echo $this->Form->input('pasos');
            echo $this->Form->input('dia');
            echo $this->Form->input('mes');
            echo $this->Form->input('semana');
            echo $this->Form->input('idusuario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
