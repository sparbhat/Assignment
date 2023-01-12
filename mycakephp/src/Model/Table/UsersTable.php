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
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->requirePresence('first_name', 'create')
            ->notEmptyString('first_name')
            ->add(
                'first_name',
                [
                    'first_name' => [
                        'rule' => array('custom', '/^[A-Za-z_]*$/'),
                        'message' => 'Please enter Letters Only.'
                    ],

                ]
            );

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email')

        ;

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password', 'Please enter password')
            ->add('password', [
                'Numeric' => [
                    'rule' => ['custom', '/[0-9]/'],
                    'message' => 'password should contain at least 1 number',
                ],
                'uppercase' => [
                    'rule' => ['custom', '/[A-Z]{1,}/'],
                    'message' => 'password should contain at least upper case letter',
                ],
                'lowercase' => [
                    'rule' => ['custom', '/[a-z]/'],
                    'message' => 'password should contain at least lowercase case letter',
                ],
                'specialcharacter' => [
                    'rule' => ['custom', '/[!@ #$%^&*()_+\-=\[\]{};,.<>]/'],
                    'message' => 'Password should contain at least 1 special characters',
                ],
                'whitespace' => [
                    'rule' => ['custom', '/^\S+$/'],
                    'message' => 'no white space allowed',
                ]
            ])
        ;
        $validator
            ->scalar('age')
            ->maxLength('age', 255)
            ->requirePresence('age', 'create')
            ->notEmptyString('age')
            ->add('age', 'custom', [
                'rule' => function ($value, $context) {
                    if (!$value) {
                        return false;
                    }

                    if ($value < 10) {
                        return 'Age is not less than 18';
                    }

                    if ($value > 35) {
                        return 'Age is not greater than 35';
                    }

                    return true;
                },
            ]);

        $validator
            ->scalar('gender')
            ->maxLength('gender', 10)
            ->requirePresence('gender', 'create')
            ->notEmptyString('gender');

        $validator
            ->scalar('phone_number')
            ->maxLength('phone_number', 255)
            ->requirePresence('phone_number', 'create')
            ->notEmptyString('phone_number');

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