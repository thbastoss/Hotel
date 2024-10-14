<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Telefone $telefone
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Telefone'), ['action' => 'edit', $telefone->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Telefone'), ['action' => 'delete', $telefone->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $telefone->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Telefones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo Telefone'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="telefone view content">
            <h3><?= h($telefone->num_telefone) ?></h3>
            <table>
                <tr>
                    <th><?= __('Num Telefone') ?></th>
                    <td><?= h($telefone->num_telefone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cliente') ?></th>
                    <td><?= $telefone->hasValue('cliente') ? $this->Html->link($telefone->cliente->nome, ['controller' => 'Cliente', 'action' => 'view', $telefone->cliente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= $telefone->hasValue('funcionario') ? $this->Html->link($telefone->funcionario->nome, ['controller' => 'Funcionario', 'action' => 'view', $telefone->funcionario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($telefone->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>