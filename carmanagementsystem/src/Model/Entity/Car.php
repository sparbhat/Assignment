<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Car Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $Name
 * @property int $brand_id
 * @property string $Make
 * @property string $Model
 * @property string $Color
 * @property string $Description
 * @property string $image
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $modified_at
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Brand $brand
 * @property \App\Model\Entity\Rating[] $ratings
 */
class Car extends Entity
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
        'user_id' => true,
        'Name' => true,
        'brand_id' => true,
        'Make' => true,
        'Model' => true,
        'Color' => true,
        'Description' => true,
        'image' => true,
        'status' => true,
        'created_at' => true,
        'modified_at' => true,
        'user' => true,
        'brand' => true,
        'ratings' => true,
    ];
}
