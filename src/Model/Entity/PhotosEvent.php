<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PhotosEvent Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $photo
 * @property string|null $photo_dir
 * @property int $event_id
 *
 * @property \App\Model\Entity\Event $event
 */
class PhotosEvent extends Entity
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
        'photo' => true,
        'photo_dir' => true,
        'event_id' => true,
        'event' => true
    ];
}
