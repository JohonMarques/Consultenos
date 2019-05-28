<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;


class PagesController extends AppController
{


    public function display(...$path)
    {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }
    public function site(){
        $this->viewBuilder()->setLayout('site');

        $this->loadModel('Mission');
        $this->loadModel('Teams');
        $this->loadModel('Trainings');
        $this->loadModel('Staffs');




        $mission = $this->Mission->find('all')->first();
        $teams = $this->Teams->find('all', array('limit' =>3))->order(['id'=>'desc']);
        $trainings = $this->Trainings->find('all', array('limit' =>3))->order(['id'=>'desc']);
        $staffs = $this->Staffs->find('all', array('limit' =>3))->order(['id'=>'asc']);




        $this->set('mission', $mission);
        $this->set('teams', $teams);
        $this->set('trainings', $trainings);
        $this->set('staffs', $staffs);


        $this->loadPublicDependencies();

    }
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow();
    }
}
