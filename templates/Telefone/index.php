<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Telefone> $telefone
 */
?>
<div class="telefone index content">
    <?= $this->Html->link(__('Novo Telefone'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Telefone') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('num_telefone') ?></th>
                    <th><?= $this->Paginator->sort('cliente_id') ?></th>
                    <th><?= $this->Paginator->sort('funcionario_id') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($telefone as $telefone): ?>
                <tr>
                    <td><?= $this->Number->format($telefone->id) ?></td>
                    <td><?= h($telefone->num_telefone) ?></td>
                    <td><?= $telefone->hasValue('cliente') ? $this->Html->link($telefone->cliente->nome, ['controller' => 'Cliente', 'action' => 'view', $telefone->cliente->id]) : '' ?></td>
                    <td><?= $telefone->hasValue('funcionario') ? $this->Html->link($telefone->funcionario->nome, ['controller' => 'Funcionario', 'action' => 'view', $telefone->funcionario->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $telefone->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $telefone->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $telefone->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $telefone->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} total')) ?></p>
    </div>
</div>