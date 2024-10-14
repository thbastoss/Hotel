<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hospedagem Entity
 *
 * @property int $id
 * @property int $funcionario_id
 * @property int $reserva_id
 * @property bool $status_hospedagem
 * @property string $tipo_pagamento
 * @property string $valor_total
 *
 * @property \App\Model\Entity\Funcionario $funcionario
 * @property \App\Model\Entity\Reserva $reserva
 * @property \App\Model\Entity\Ganho[] $ganho
 * @property \App\Model\Entity\Produto[] $produto
 * @property \App\Model\Entity\Servico[] $servico
 */
class Hospedagem extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'funcionario_id' => true,
        'reserva_id' => true,
        'status_hospedagem' => true,
        'tipo_pagamento' => true,
        'valor_total' => true,
        'funcionario' => true,
        'reserva' => true,
        'ganho' => true,
        'produto' => true,
        'servico' => true,
    ];
}
