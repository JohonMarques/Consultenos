<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StaffPost Entity
 *
 * @property int $id
 * @property int $staff_id
 * @property string $titulo
 * @property string $body
 * @property string|null $photo
 * @property \Cake\I18n\FrozenTime|null $created
 *
 * @property \App\Model\Entity\Staff $staff
 */
class StaffPost extends Entity
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
        'staff_id' => true,
        'titulo' => true,
        'body' => true,
        'photo' => true,
        'created' => true,
        'staff' => true
    ];
}
