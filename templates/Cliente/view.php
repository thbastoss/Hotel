<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Cliente'), ['action' => 'edit', $cliente->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $cliente->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo Cliente'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="cliente view content">
            <h3><?= h($cliente->nome) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($cliente->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco') ?></th>
                    <td><?= h($cliente->endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cidade') ?></th>
                    <td><?= h($cliente->cidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($cliente->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pais') ?></th>
                    <td><?= h($cliente->pais) ?></td>
                </tr>
                <tr>
                    <th><?= __('Motivo Visita') ?></th>
                    <td><?= h($cliente->motivo_visita) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($cliente->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Redes Sociais') ?></th>
                    <td><?= h($cliente->redes_sociais) ?></td>
                </tr>
                <tr>
                    <th><?= __('Profissao') ?></th>
                    <td><?= h($cliente->profissao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cpf') ?></th>
                    <td><?= h($cliente->cpf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Doc Pessoal') ?></th>
                    <td><?= h($cliente->doc_pessoal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cliente->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Reserva Relacionada') ?></h4>
                <?php if (!empty($cliente->reserva)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Quarto Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Data Reserva') ?></th>
                            <th><?= __('Data Entrada') ?></th>
                            <th><?= __('Data Saida') ?></th>
                            <th><?= __('Pessoas') ?></th>
                            <th><?= __('Criancas') ?></th>
                            <th><?= __('Status Reserva') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($cliente->reserva as $reserva) : ?>
                        <tr>
                            <td><?= h($reserva->id) ?></td>
                            <td><?= h($reserva->cliente_id) ?></td>
                            <td><?= h($reserva->quarto_id) ?></td>
                            <td><?= h($reserva->funcionario_id) ?></td>
                            <td><?= h($reserva->data_reserva) ?></td>
                            <td><?= h($reserva->data_entrada) ?></td>
                            <td><?= h($reserva->data_saida) ?></td>
                            <td><?= h($reserva->pessoas) ?></td>
                            <td><?= h($reserva->criancas) ?></td>
                            <td><?= h($reserva->status_reserva) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Visualizar'), ['controller' => 'Reserva', 'action' => 'view', $reserva->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['controller' => 'Reserva', 'action' => 'edit', $reserva->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Reserva', 'action' => 'delete', $reserva->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $reserva->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Telefone Relacionado') ?></h4>
                <?php if (!empty($cliente->telefone)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Num Telefone') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($cliente->telefone as $telefone) : ?>
                        <tr>
                            <td><?= h($telefone->id) ?></td>
                            <td><?= h($telefone->num_telefone) ?></td>
                            <td><?= h($telefone->cliente_id) ?></td>
                            <td><?= h($telefone->funcionario_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Visualizar'), ['controller' => 'Telefone', 'action' => 'view', $telefone->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['controller' => 'Telefone', 'action' => 'edit', $telefone->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Telefone', 'action' => 'delete', $telefone->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $telefone->id)]) ?>
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