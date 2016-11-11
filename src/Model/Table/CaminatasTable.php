<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Caminatas Model
 *
 * @method \App\Model\Entity\Caminata get($primaryKey, $options = [])
 * @method \App\Model\Entity\Caminata newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Caminata[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Caminata|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Caminata patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Caminata[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Caminata findOrCreate($search, callable $callback = null)
 */
class CaminatasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('caminatas');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('pasos')
            ->requirePresence('pasos', 'create')
            ->notEmpty('pasos');

        $validator
            ->requirePresence('dia', 'create')
            ->notEmpty('dia');

        $validator
            ->requirePresence('mes', 'create')
            ->notEmpty('mes');

        $validator
            ->integer('semana')
            ->requirePresence('semana', 'create')
            ->notEmpty('semana');

        $validator
            ->integer('idusuario')
            ->requirePresence('idusuario', 'create')
            ->notEmpty('idusuario');

        return $validator;
    }
}
