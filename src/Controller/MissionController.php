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
                $this->Flash->success(__('A informação de:  {0} foi salva', $mission->title));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A informação de:  {0} nao pode ser salva', $mission->title));
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
                $this->Flash->success(__('A informação de:  {0} foi alterada', $mission->title));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A informação de:  {0} nao pode ser alterada', $mission->title));
        }
        $this->set(compact('mission'));
    }



    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mission = $this->Mission->get($id);
        if ($this->Mission->delete($mission)) {
            $this->Flash->success(__('A informação de:  {0} foi excluida', $mission->title));
        } else {
            $this->Flash->error(__('A informação de:  {0} nao pode ser excluida', $mission->title));
        }

        return $this->redirect(['action' => 'index']);
    }


}
