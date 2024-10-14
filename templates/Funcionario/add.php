<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario $funcionario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Lista de Funcionarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="funcionario form content">
            <?= $this->Form->create($funcionario) ?>
            <fieldset>
                <legend><?= __('Adcionar Funcionario') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('data_nascimento');
                    echo $this->Form->control('endereco');
                    echo $this->Form->control('funcao');
                    echo $this->Form->control('salario');
                    echo $this->Form->control('avaliacao');
                    echo $this->Form->control('data_cadastro');
                    echo $this->Form->control('cpf');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
