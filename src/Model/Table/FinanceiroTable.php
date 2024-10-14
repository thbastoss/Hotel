<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Financeiro Model
 *
 * @property \App\Model\Table\FuncionarioTable&\Cake\ORM\Association\BelongsTo $Funcionario
 * @property \App\Model\Table\DespesaTable&\Cake\ORM\Association\BelongsTo $Despesa
 * @property \App\Model\Table\GanhoTable&\Cake\ORM\Association\BelongsTo $Ganho
 *
 * @method \App\Model\Entity\Financeiro newEmptyEntity()
 * @method \App\Model\Entity\Financeiro newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Financeiro> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Financeiro get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Financeiro findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Financeiro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Financeiro> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Financeiro|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Financeiro saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Financeiro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Financeiro>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Financeiro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Financeiro> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Financeiro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Financeiro>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Financeiro>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Financeiro> deleteManyOrFail(iterable $entities, array $options = [])
 */
class FinanceiroTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('financeiro');
        $this->setDisplayField('mes_fechamento');
        $this->setPrimaryKey('id');

        $this->belongsTo('Funcionario', [
            'foreignKey' => 'funcionario_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Despesa', [
            'foreignKey' => 'despesa_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Ganho', [
            'foreignKey' => 'ganho_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('funcionario_id')
            ->notEmptyString('funcionario_id');

        $validator
            ->integer('despesa_id')
            ->notEmptyString('despesa_id');

        $validator
            ->integer('ganho_id')
            ->notEmptyString('ganho_id');

        $validator
            ->scalar('mes_fechamento')
            ->maxLength('mes_fechamento', 10)
            ->requirePresence('mes_fechamento', 'create')
            ->notEmptyString('mes_fechamento');

        $validator
            ->decimal('valor_liquido')
            ->requirePresence('valor_liquido', 'create')
            ->notEmptyString('valor_liquido');

        $validator
            ->date('data_lancamento')
            ->requirePresence('data_lancamento', 'create')
            ->notEmptyDate('data_lancamento');

        $validator
            ->scalar('ano')
            ->requirePresence('ano', 'create')
            ->notEmptyString('ano');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['funcionario_id'], 'Funcionario'), ['errorField' => 'funcionario_id']);
        $rules->add($rules->existsIn(['despesa_id'], 'Despesa'), ['errorField' => 'despesa_id']);
        $rules->add($rules->existsIn(['ganho_id'], 'Ganho'), ['errorField' => 'ganho_id']);

        return $rules;
    }
}
