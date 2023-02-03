<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\BrandsTable&\Cake\ORM\Association\HasMany $Brands
 * @property \App\Model\Table\CarsTable&\Cake\ORM\Association\HasMany $Cars
 * @property \App\Model\Table\RatingsTable&\Cake\ORM\Association\HasMany $Ratings
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Brands', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Cars', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Ratings', [
            'foreignKey' => 'user_id',
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
            ->scalar('Name')
            ->maxLength('Name', 255)
            ->requirePresence('Name', 'create')
            ->notEmptyString('Name')
            ->add(
                'Name',
                [
                    'Name' => [
                        'rule' => array('custom', '/^[A-Za-z_]*$/'),
                        'message' => 'numbers not accepted .'
                    ]
                ]
            );

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password')
            ->add('password', [
                'password' => [
                    'rule' => array('custom', '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'),
                    'message' => 'password should contain alteast 8 digits, 1 Special Character, one number '
                ]
            ]);

        $validator
            ->allowEmptyFile('image_file')
            ->add('image_file', [
                'mimeType' => [
                    'rule' => ['mimeType', ['image/jpg', 'image/png', 'image/jpeg']],
                    'message' => 'Please upload only jpg and png.',
                ],
                'fileSize' => [
                    'rule' => ['fileSize', '<=', '1MB'],
                    'message' => 'Image file size must be less than 1MB.',
                ],
            ]);
        // $validator
        //     ->integer('Role')
        //     ->notEmptyString('Role');

        // $validator
        //     ->integer('status')
        //     ->notEmptyString('status');

        // $validator
        //     ->dateTime('created_at')
        //     ->notEmptyDateTime('created_at');

        // $validator
        //     ->dateTime('modified_at')
        //     ->notEmptyDateTime('modified_at');

        // $validator
        //     ->integer('token')
        //     ->requirePresence('token', 'create')
        //     ->notEmptyString('token');

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
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);

        return $rules;
    }
}