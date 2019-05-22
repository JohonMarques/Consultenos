<?php
namespace App\Controller;

use App\Controller\AppController;


class MissionController extends AppController
{

    public function index()
    {
        $mission = $this->paginate($this->Mission);

        $this->set(compact('mission'));
    }


    public function view($id = null)
    {
        $mission = $this->Mission->get($id, [
            'contain' => []
        ]);

        $this->set('mission', $mission);
    }



    public function add()
    {
        $mission = $this->Mission->newEntity();
        if ($this->request->is('post')) {
            $mission = $this->Mission->patchEntity($mission, $this->request->getData());
            if ($this->Mission->save($mission)) {
                $this->Flash->success(__('The {0} has been saved.', 'Mission'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Mission'));
        }
        $this->set(compact('mission'));


    }



    public function edit($id = null)
    {
        $mission = $this->Mission->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mission = $this->Mission->patchEntity($mission, $this->request->getData());
            if ($this->Mission->save($mission)) {
                $this->Flash->success(__('The {0} has been saved.', 'Mission'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Mission'));
        }
        $this->set(compact('mission'));
    }



    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mission = $this->Mission->get($id);
        if ($this->Mission->delete($mission)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Mission'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Mission'));
        }

        return $this->redirect(['action' => 'index']);
    }


}
