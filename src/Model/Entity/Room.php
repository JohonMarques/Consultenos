<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Room Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string $name
 * @property string $beds
 * @property string $people
 * @property string $view
 * @property string $wifi
 * @property string|null $details
 * @property string|null $price
 *
 * @property \App\Model\Entity\PhotosRoom[] $photos_rooms
 */
class Room extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'created' => true,
        'modified' => true,
        'name' => true,
        'beds' => true,
        'people' => true,
        'view' => true,
        'wifi' => true,
        'details' => true,
        'price' => true,
        'photos_rooms' => true
    ];
}
