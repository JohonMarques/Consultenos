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

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
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
        $this->loadModel('Banners');
        $this->loadModel('Rooms');
        $this->loadModel('PhotosRooms');
        $this->loadModel('Galleries');
        $this->loadModel('Comments');
        $this->loadModel('Videos');
        $this->loadModel('Blogs');
        $this->loadModel('StaffPosts');
        $this->loadModel('Mission');
        $this->loadModel('Teams');
        $this->loadModel('Trainings');
        $this->loadModel('Staffs');



        $banners = $this->Banners->find('all');
        $rooms = $this->Rooms->find('all');
        $images = $this->PhotosRooms->find('all');
        $galleries = $this->Galleries->find('all', array('limit' =>9))->order(['id'=>'desc']);
        $comments = $this->Comments->find('all');
        $videos = $this->Videos->find('all', array('limit' =>1));
        $blogs = $this->Blogs->find('all', array('limit' =>3))->order(['id'=>'desc']);
        $mission = $this->Mission->find('all')->first();
        $teams = $this->Teams->find('all', array('limit' =>3))->order(['id'=>'desc']);
        $trainings = $this->Trainings->find('all', array('limit' =>3))->order(['id'=>'desc']);
        $staffs = $this->Staffs->find('all', array('limit' =>3))->order(['id'=>'asc']);



        $this->set('images', $images);
        $this->set('galleries', $galleries);
        $this->set('banners', $banners);
        $this->set('rooms', $rooms);
        $this->set('comments', $comments);
        $this->set('videos', $videos);
        $this->set('blogs', $blogs);
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
