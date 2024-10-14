<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HospedagemProduto $hospedagemProduto
 * @var \Cake\Collection\CollectionInterface|string[] $hospedagem
 * @var \Cake\Collection\CollectionInterface|string[] $produto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Hospedagem Produto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="hospedagemProduto form content">
            <?= $this->Form->create($hospedagemProduto) ?>
            <fieldset>
                <legend><?= __('Add Hospedagem Produto') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
