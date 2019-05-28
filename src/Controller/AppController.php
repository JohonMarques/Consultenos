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

use Cake\Controller\Controller;
use Cake\Event\Event;


class AppController extends Controller
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        $this->loadComponent('Auth', [

            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'username',
                        'password' => 'password'
                    ]
                ]
            ],
            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'index'
            ],

            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ]
        ]);

        //$this->loadComponent('Security');
    }
    public function beforeRender(Event $event)
    {
        $this->viewBuilder()->setTheme('AdminLTE');
        $this->viewBuilder()->setClassName('AdminLTE.AdminLTE');

    }

    public  function loadPublicDependencies(){
        $this->loadModel('Categories');
        $this->loadModel('StaffPosts');
        $this->loadModel('About');

        $categories = $this->Categories->find('all')->contain(['Staffs'])->toArray();
        $globalposts = $this->StaffPosts->find('all',array('limit' =>3))->order(['created'=>'desc'])->toArray();
        $about = $this->About->find('all')->first();


        $this->set(compact('categories'));
        $this->set(compact('globalposts'));
        $this->set(compact('about'));

    }
}
