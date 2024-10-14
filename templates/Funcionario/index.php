<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Funcionario> $funcionario
 */
?>
<div class="funcionario index content">
    <?= $this->Html->link(__('Novo Funcionario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Funcionario') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('data_nascimento') ?></th>
                    <th><?= $this->Paginator->sort('endereco') ?></th>
                    <th><?= $this->Paginator->sort('funcao') ?></th>
                    <th><?= $this->Paginator->sort('salario') ?></th>
                    <th><?= $this->Paginator->sort('avaliacao') ?></th>
                    <th><?= $this->Paginator->sort('data_cadastro') ?></th>
                    <th><?= $this->Paginator->sort('cpf') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($funcionario as $funcionario): ?>
                <tr>
                    <td><?= $this->Number->format($funcionario->id) ?></td>
                    <td><?= h($funcionario->nome) ?></td>
                    <td><?= h($funcionario->data_nascimento) ?></td>
                    <td><?= h($funcionario->endereco) ?></td>
                    <td><?= h($funcionario->funcao) ?></td>
                    <td><?= $this->Number->format($funcionario->salario) ?></td>
                    <td><?= h($funcionario->avaliacao) ?></td>
                    <td><?= h($funcionario->data_cadastro) ?></td>
                    <td><?= h($funcionario->cpf) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $funcionario->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $funcionario->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $funcionario->id)]) ?>
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
            <?= $this->Paginator->next(__('proximo') . ' >') ?>
            <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} total')) ?></p>
    </div>
</div>