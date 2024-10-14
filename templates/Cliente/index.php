<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Cliente> $cliente
 */
?>
<div class="cliente index content">
    <?= $this->Html->link(__('Novo Cliente'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cliente') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('endereco') ?></th>
                    <th><?= $this->Paginator->sort('cidade') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th><?= $this->Paginator->sort('pais') ?></th>
                    <th><?= $this->Paginator->sort('motivo_visita') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('redes_sociais') ?></th>
                    <th><?= $this->Paginator->sort('profissao') ?></th>
                    <th><?= $this->Paginator->sort('cpf') ?></th>
                    <th><?= $this->Paginator->sort('doc_pessoal') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cliente as $cliente): ?>
                <tr>
                    <td><?= $this->Number->format($cliente->id) ?></td>
                    <td><?= h($cliente->nome) ?></td>
                    <td><?= h($cliente->endereco) ?></td>
                    <td><?= h($cliente->cidade) ?></td>
                    <td><?= h($cliente->estado) ?></td>
                    <td><?= h($cliente->pais) ?></td>
                    <td><?= h($cliente->motivo_visita) ?></td>
                    <td><?= h($cliente->email) ?></td>
                    <td><?= h($cliente->redes_sociais) ?></td>
                    <td><?= h($cliente->profissao) ?></td>
                    <td><?= h($cliente->cpf) ?></td>
                    <td><?= h($cliente->doc_pessoal) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $cliente->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cliente->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $cliente->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $cliente->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('último')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('anterior') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} total')) ?></p>
    </div>
</div>