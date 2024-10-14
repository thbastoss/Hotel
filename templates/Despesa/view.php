<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Despesa $despesa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Despesa'), ['action' => 'edit', $despesa->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Despesa'), ['action' => 'delete', $despesa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $despesa->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Despesa'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Despesa'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="despesa view content">
            <h3><?= h($despesa->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Funcionario') ?></th>
                    <td><?= $despesa->hasValue('funcionario') ? $this->Html->link($despesa->funcionario->nome, ['controller' => 'Funcionario', 'action' => 'view', $despesa->funcionario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Produto') ?></th>
                    <td><?= $despesa->hasValue('produto') ? $this->Html->link($despesa->produto->tipo_produto, ['controller' => 'Produto', 'action' => 'view', $despesa->produto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($despesa->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Gasto') ?></th>
                    <td><?= $this->Number->format($despesa->valor_gasto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Lancamento') ?></th>
                    <td><?= h($despesa->data_lancamento) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Financeiro') ?></h4>
                <?php if (!empty($despesa->financeiro)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Despesa Id') ?></th>
                            <th><?= __('Ganho Id') ?></th>
                            <th><?= __('Mes Fechamento') ?></th>
                            <th><?= __('Valor Liquido') ?></th>
                            <th><?= __('Data Lancamento') ?></th>
                            <th><?= __('Ano') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($despesa->financeiro as $financeiro) : ?>
                        <tr>
                            <td><?= h($financeiro->id) ?></td>
                            <td><?= h($financeiro->funcionario_id) ?></td>
                            <td><?= h($financeiro->despesa_id) ?></td>
                            <td><?= h($financeiro->ganho_id) ?></td>
                            <td><?= h($financeiro->mes_fechamento) ?></td>
                            <td><?= h($financeiro->valor_liquido) ?></td>
                            <td><?= h($financeiro->data_lancamento) ?></td>
                            <td><?= h($financeiro->ano) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Financeiro', 'action' => 'view', $financeiro->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Financeiro', 'action' => 'edit', $financeiro->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Financeiro', 'action' => 'delete', $financeiro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $financeiro->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>