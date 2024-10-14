<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HospedagemProduto $hospedagemProduto
 * @var string[]|\Cake\Collection\CollectionInterface $hospedagem
 * @var string[]|\Cake\Collection\CollectionInterface $produto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $hospedagemProduto->hospedagem_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hospedagemProduto->hospedagem_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Hospedagem Produto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="hospedagemProduto form content">
            <?= $this->Form->create($hospedagemProduto) ?>
            <fieldset>
                <legend><?= __('Edit Hospedagem Produto') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
