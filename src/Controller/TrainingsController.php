<?php
namespace App\Controller;

use App\Controller\AppController;


class TrainingsController extends AppController
{

    public function index()
    {
        $trainings = $this->paginate($this->Trainings);

        $this->set(compact('trainings'));
    }


    public function view($id = null)
    {
        $training = $this->Trainings->get($id, [
            'contain' => []
        ]);

        $this->set('training', $training);
    }



    public function add()
    {
        $training = $this->Trainings->newEntity();
        if ($this->request->is('post')) {
            $training = $this->Trainings->patchEntity($training, $this->request->getData());
            if ($this->Trainings->save($training)) {
                $this->Flash->success(__('O Treinamento de: {0} foi salvo com sucesso', $training->title));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Treinamento de: {0} nao pode ser salvo, tente novamente', $training->title));
        }
        $this->set(compact('training'));
    }



    public function edit($id = null)
    {
        $training = $this->Trainings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $training = $this->Trainings->patchEntity($training, $this->request->getData());
            if ($this->Trainings->save($training)) {
                $this->Flash->success(__('O Treinamento de: {0} foi alterado com sucesso', $training->title));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Treinamento de: {0} nao pode ser alterado, tente novamente', $training->title));
        }
        $this->set(compact('training'));
    }



    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $training = $this->Trainings->get($id);
        if ($this->Trainings->delete($training)) {
            $this->Flash->success(__('O Treinamento de: {0} foi excluido com sucesso', $training->title));
        } else {
            $this->Flash->error(__('O Treinamento de: {0} nao pode ser excluido, tente novamente', $training->title));
        }

        return $this->redirect(['action' => 'index']);
    }
}
