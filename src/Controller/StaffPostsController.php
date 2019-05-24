<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class StaffPostsController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'contain' => ['Staffs']
        ];
        $staffPosts = $this->paginate($this->StaffPosts);

        $this->set(compact('staffPosts'));
    }

    public function view($id = null)
    {
        $staffPost = $this->StaffPosts->get($id, [
            'contain' => ['Staffs']
        ]);

        $this->set('staffPost', $staffPost);
    }



    public function add()
    {
        $staffPost = $this->StaffPosts->newEntity();
        if ($this->request->is('post')) {
            $staffPost = $this->StaffPosts->patchEntity($staffPost, $this->request->getData());
            if ($this->StaffPosts->save($staffPost)) {
                $this->Flash->success(__('O Post: {0} foi salvo com sucesso', $staffPost->title));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Post: {0} Nao pode ser salvo,tente novamente', $staffPost->title));
        }
        $staffs = $this->StaffPosts->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('staffPost', 'staffs'));
    }



    public function edit($id = null)
    {
        $staffPost = $this->StaffPosts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $staffPost = $this->StaffPosts->patchEntity($staffPost, $this->request->getData());
            if ($this->StaffPosts->save($staffPost)) {
                $this->Flash->success(__('O Post: {0} foi alterado com sucesso', $staffPost->title));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Post: {0} Nao pode ser alterado,tente novamente', $staffPost->title));
        }
        $staffs = $this->StaffPosts->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('staffPost', 'staffs'));
    }



    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $staffPost = $this->StaffPosts->get($id);
        if ($this->StaffPosts->delete($staffPost)) {
            $this->Flash->success(__('O Post: {0} foi excluido com sucesso', $staffPost->title));
        } else {
            $this->Flash->error(__('O Post: {0} Nao pode ser excluido,tente novamente', $staffPost->title));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function posts($staffId){
        $this->viewBuilder()->setLayout('site');
        $this->paginate = [
            'limit' => 3,
            'order' => [
                'StaffPosts.id' => 'asc'
            ]
        ];
        $posts = $this->StaffPosts->find('all')
            ->where(['staff_id' => $staffId])
            ->order(['id' => 'desc']);

        $this->set('posts', $this->paginate($posts));

        $this->loadPublicDependencies();

    }


    public function show($id)
    {
        $this->viewBuilder()->setLayout('site');

        $staffPost = $this->StaffPosts->get($id, [
            'contain' => ['Staffs']
        ]);


        $this->set('staffPost', $staffPost);

        $this->loadPublicDependencies();
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['posts','show']);
    }
}
