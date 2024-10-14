<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Telefone $telefone
 * @var string[]|\Cake\Collection\CollectionInterface $cliente
 * @var string[]|\Cake\Collection\CollectionInterface $funcionario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $telefone->id],
                ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $telefone->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Telefones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="telefone form content">
            <?= $this->Form->create($telefone) ?>
            <fieldset>
                <legend><?= __('Editar Telefone') ?></legend>
                <?php
                    echo $this->Form->control('num_telefone');
                    echo $this->Form->control('cliente_id', ['options' => $cliente, 'empty' => true]);
                    echo $this->Form->control('funcionario_id', ['options' => $funcionario, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
