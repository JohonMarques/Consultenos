<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PhotosRoom Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $name
 * @property string|null $photo
 * @property string|null $photo_dir
 * @property int $room_id
 *
 * @property \App\Model\Entity\Room $room
 */
class PhotosRoom extends Entity
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
        'photo' => true,
        'photo_dir' => true,
        'room_id' => true,
        'room' => true
    ];
}
