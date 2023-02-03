<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Authentication\PasswordHasher\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $Name
 * @property string $email
 * @property string $password
 * @property int $Role
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $modified_at
 * @property int $token
 *
 * @property \App\Model\Entity\Brand[] $brands
 * @property \App\Model\Entity\Car[] $cars
 * @property \App\Model\Entity\Rating[] $ratings
 */
class User extends Entity
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
    protected $_accessible = [
        'Name' => true,
        'email' => true,
        'password' => true,
        'Role' => true,
        'status' => true,
        'created_at' => true,
        'modified_at' => true,
        'token' => false,
        'brands' => true,
        'cars' => true,
        'ratings' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
        'token',
    ];
    protected function _setPassword(string $password): ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}