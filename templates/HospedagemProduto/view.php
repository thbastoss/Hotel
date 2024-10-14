<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HospedagemProduto $hospedagemProduto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Hospedagem Produto'), ['action' => 'edit', $hospedagemProduto->hospedagem_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Hospedagem Produto'), ['action' => 'delete', $hospedagemProduto->hospedagem_id], ['confirm' => __('Are you sure you want to delete # {0}?', $hospedagemProduto->hospedagem_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Hospedagem Produto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Hospedagem Produto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="hospedagemProduto view content">
            <h3><?= h($hospedagemProduto->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Hospedagem') ?></th>
                    <td><?= $hospedagemProduto->hasValue('hospedagem') ? $this->Html->link($hospedagemProduto->hospedagem->tipo_pagamento, ['controller' => 'Hospedagem', 'action' => 'view', $hospedagemProduto->hospedagem->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Produto') ?></th>
                    <td><?= $hospedagemProduto->hasValue('produto') ? $this->Html->link($hospedagemProduto->produto->tipo_produto, ['controller' => 'Produto', 'action' => 'view', $hospedagemProduto->produto->id]) : '' ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>