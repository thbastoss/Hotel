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
            <?= $this->Html->link(__('Lista de Clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="cliente form content">
            <?= $this->Form->create($cliente) ?>
            <fieldset>
                <legend><?= __('Adcionar Cliente') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('endereco');
                    echo $this->Form->control('cidade');
                    echo $this->Form->control('estado');
                    echo $this->Form->control('pais');
                    echo $this->Form->control('motivo_visita');
                    echo $this->Form->control('email');
                    echo $this->Form->control('redes_sociais');
                    echo $this->Form->control('profissao');
                    echo $this->Form->control('cpf');
                    echo $this->Form->control('doc_pessoal');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
