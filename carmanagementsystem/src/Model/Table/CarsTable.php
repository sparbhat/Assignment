<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cars Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\BrandsTable&\Cake\ORM\Association\BelongsTo $Brands
 * @property \App\Model\Table\RatingsTable&\Cake\ORM\Association\HasMany $Ratings
 *
 * @method \App\Model\Entity\Car newEmptyEntity()
 * @method \App\Model\Entity\Car newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Car[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Car get($primaryKey, $options = [])
 * @method \App\Model\Entity\Car findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Car patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Car[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Car|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Car saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Car[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Car[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Car[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Car[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CarsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('cars');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Brands', [
            'foreignKey' => 'brand_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Ratings', [
            'foreignKey' => 'car_id',
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
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->scalar('Name')
            ->maxLength('Name', 255)
            ->requirePresence('Name', 'create')
            ->notEmptyString('Name');



        $validator
            ->integer('brand_id')
            ->notEmptyString('brand_id');

        $validator
            ->scalar('Make')
            ->maxLength('Make', 255)
            ->requirePresence('Make', 'create')
            ->notEmptyString('Make')
            ->add('Make', [
                [
                    'rule' => ['range', 2000, 2023],
                    'message' => 'Please enter year between 2000-2023',
                ]
            ]);


        $validator
            ->scalar('Model')
            ->maxLength('Model', 255)
            ->requirePresence('Model', 'create')
            ->notEmptyString('Model');


        $validator
            ->scalar('Color')
            ->maxLength('Color', 255)
            ->requirePresence('Color', 'create')
            ->notEmptyString('Color')
            ->add(
                'Name',
                [
                    'Name' => [
                        'rule' => array('custom', '/^[A-Za-z_]*$/'),
                        'message' => 'Numbers not accepted .'
                    ]
                ]
            );

        $validator
            ->scalar('Description')
            ->maxLength('Description', 255)
            ->requirePresence('Description', 'create')
            ->notEmptyString('Description')
            ->add(
                'Name',
                [
                    'Name' => [
                        'rule' => array('custom', '/^[A-Za-z_]*$/'),
                        'message' => 'Numbers not accepted .'
                    ]
                ]
            );

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->requirePresence('image', 'create')
            ->notEmptyFile('image');

        $validator
            ->integer('status')
            ->notEmptyString('status');

        $validator
            ->dateTime('created_at')
            ->notEmptyDateTime('created_at');

        $validator
            ->dateTime('modified_at')
            ->notEmptyDateTime('modified_at');

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
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn('brand_id', 'Brands'), ['errorField' => 'brand_id']);

        return $rules;
    }
}