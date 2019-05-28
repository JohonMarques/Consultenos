<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class Team extends Entity
{

    protected $_accessible = [
        'name' => true,
        'cargo' => true,
        'resumo' => true,
        'body' => true,
        'photo' => true,
        'created' => true
    ];
}
