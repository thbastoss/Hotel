<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\HospedagemProduto> $hospedagemProduto
 */
?>
<div class="hospedagemProduto index content">
    <?= $this->Html->link(__('New Hospedagem Produto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Hospedagem Produto') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('hospedagem_id') ?></th>
                    <th><?= $this->Paginator->sort('produto_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hospedagemProduto as $hospedagemProduto): ?>
                <tr>
                    <td><?= $hospedagemProduto->hasValue('hospedagem') ? $this->Html->link($hospedagemProduto->hospedagem->tipo_pagamento, ['controller' => 'Hospedagem', 'action' => 'view', $hospedagemProduto->hospedagem->id]) : '' ?></td>
                    <td><?= $hospedagemProduto->hasValue('produto') ? $this->Html->link($hospedagemProduto->produto->tipo_produto, ['controller' => 'Produto', 'action' => 'view', $hospedagemProduto->produto->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $hospedagemProduto->hospedagem_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hospedagemProduto->hospedagem_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hospedagemProduto->hospedagem_id], ['confirm' => __('Are you sure you want to delete # {0}?', $hospedagemProduto->hospedagem_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>