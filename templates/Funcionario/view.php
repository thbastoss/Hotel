<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario $funcionario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Funcionario'), ['action' => 'edit', $funcionario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Funcionario'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $funcionario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Funcionarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo Funcionario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="funcionario view content">
            <h3><?= h($funcionario->nome) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($funcionario->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco') ?></th>
                    <td><?= h($funcionario->endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Funcao') ?></th>
                    <td><?= h($funcionario->funcao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Avaliacao') ?></th>
                    <td><?= h($funcionario->avaliacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cpf') ?></th>
                    <td><?= h($funcionario->cpf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($funcionario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salario') ?></th>
                    <td><?= $this->Number->format($funcionario->salario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Nascimento') ?></th>
                    <td><?= h($funcionario->data_nascimento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Cadastro') ?></th>
                    <td><?= h($funcionario->data_cadastro) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Despesa Relacionada') ?></h4>
                <?php if (!empty($funcionario->despesa)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Produto Id') ?></th>
                            <th><?= __('Valor Gasto') ?></th>
                            <th><?= __('Data Lancamento') ?></th>
                            <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                        <?php foreach ($funcionario->despesa as $despesa) : ?>
                        <tr>
                            <td><?= h($despesa->id) ?></td>
                            <td><?= h($despesa->funcionario_id) ?></td>
                            <td><?= h($despesa->produto_id) ?></td>
                            <td><?= h($despesa->valor_gasto) ?></td>
                            <td><?= h($despesa->data_lancamento) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Visualizar'), ['controller' => 'Despesa', 'action' => 'view', $despesa->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['controller' => 'Despesa', 'action' => 'edit', $despesa->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Despesa', 'action' => 'delete', $despesa->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $despesa->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Estoque Relacionado') ?></h4>
                <?php if (!empty($funcionario->estoque)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Produto Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Quantidade') ?></th>
                            <th><?= __('Data Baixa') ?></th>
                            <th><?= __('Data Lancamento') ?></th>
                            <th><?= __('Num Fiscal') ?></th>
                            <th><?= __('Tipo Operacao') ?></th>
                            <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                        <?php foreach ($funcionario->estoque as $estoque) : ?>
                        <tr>
                            <td><?= h($estoque->id) ?></td>
                            <td><?= h($estoque->produto_id) ?></td>
                            <td><?= h($estoque->funcionario_id) ?></td>
                            <td><?= h($estoque->quantidade) ?></td>
                            <td><?= h($estoque->data_baixa) ?></td>
                            <td><?= h($estoque->data_lancamento) ?></td>
                            <td><?= h($estoque->num_fiscal) ?></td>
                            <td><?= h($estoque->tipo_operacao) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Visualizar'), ['controller' => 'Estoque', 'action' => 'view', $estoque->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['controller' => 'Estoque', 'action' => 'edit', $estoque->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Estoque', 'action' => 'delete', $estoque->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $estoque->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Financeiro Relacionado') ?></h4>
                <?php if (!empty($funcionario->financeiro)) : ?>
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
                            <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                        <?php foreach ($funcionario->financeiro as $financeiro) : ?>
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
                                <?= $this->Html->link(__('Visualizar'), ['controller' => 'Financeiro', 'action' => 'view', $financeiro->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['controller' => 'Financeiro', 'action' => 'edit', $financeiro->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Financeiro', 'action' => 'delete', $financeiro->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $financeiro->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Hospedagem Relacionada') ?></h4>
                <?php if (!empty($funcionario->hospedagem)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th><?= __('Reserva Id') ?></th>
                            <th><?= __('Status Hospedagem') ?></th>
                            <th><?= __('Tipo Pagamento') ?></th>
                            <th><?= __('Valor Total') ?></th>
                            <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                        <?php foreach ($funcionario->hospedagem as $hospedagem) : ?>
                        <tr>
                            <td><?= h($hospedagem->id) ?></td>
                            <td><?= h($hospedagem->funcionario_id) ?></td>
                            <td><?= h($hospedagem->reserva_id) ?></td>
                            <td><?= h($hospedagem->status_hospedagem) ?></td>
                            <td><?= h($hospedagem->tipo_pagamento) ?></td>
                            <td><?= h($hospedagem->valor_total) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Visualizar'), ['controller' => 'Hospedagem', 'action' => 'view', $hospedagem->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['controller' => 'Hospedagem', 'action' => 'edit', $hospedagem->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Hospedagem', 'action' => 'delete', $hospedagem->id], ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $hospedagem->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Reserva Relacionada') ?></h4>
                <?php if (!empty($funcionario->reserva)) : ?>
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
                            <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                        <?php foreach ($funcionario->reserva as $reserva) : ?>
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
                <?php if (!empty($funcionario->telefone)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Num Telefone') ?></th>
                            <th><?= __('Cliente Id') ?></th>
                            <th><?= __('Funcionario Id') ?></th>
                            <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                        <?php foreach ($funcionario->telefone as $telefone) : ?>
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