<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class TeamsController extends AppController
{

    public function index()
    {
        $teams = $this->paginate($this->Teams);

        $this->set(compact('teams'));
    }


    public function view($id = null)
    {
        $team = $this->Teams->get($id, [
            'contain' => []
        ]);

        $this->set('team', $team);
    }


    public function add()
    {
        $team = $this->Teams->newEntity();
        if ($this->request->is('post')) {
            $team = $this->Teams->patchEntity($team, $this->request->getData());
            if ($this->Teams->save($team)) {
                $this->Flash->success(__('O funcionaro: {0} foi salvo com sucesso', $team->name));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O funcionaro: {0} nao pode ser salvo. Por Favor tente novamente.', $team->name));
        }
        $this->set(compact('team'));
    }



    public function edit($id = null)
    {
        $team = $this->Teams->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $team = $this->Teams->patchEntity($team, $this->request->getData());
            if ($this->Teams->save($team)) {
                $this->Flash->success(__('O funcionaro: {0} foi alterado com sucesso', $team->name));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O funcionaro: {0} nao pode ser alterado. Por Favor tente novamente.', $team->name));
        }
        $this->set(compact('team'));
    }



    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $team = $this->Teams->get($id);
        if ($this->Teams->delete($team)) {
            $this->Flash->success(__('O funcionaro: {0} foi excluido com sucesso', $team->name));
        } else {
            $this->Flash->error(__('O funcionaro: {0} nao pode ser excluido. Por Favor tente novamente.', $team->name));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function equipe()
    {
        $this->viewBuilder()->setLayout('site');

        $teams = $this->Teams->find('all')
            ->order(['id' => 'desc']);


        $this->set('teams', $teams);

        $this->loadPublicDependencies();
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('equipe');
    }
}
