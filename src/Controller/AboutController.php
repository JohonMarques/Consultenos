<?php
namespace App\Controller;

use App\Controller\AppController;


class AboutController extends AppController
{

    public function index()
    {
        $about = $this->paginate($this->About);

        $this->set(compact('about'));
    }

    public function view($id = null)
    {
        $about = $this->About->get($id, [
            'contain' => []
        ]);

        $this->set('about', $about);
    }


    public function add()
    {
        $about = $this->About->newEntity();
        if ($this->request->is('post')) {
            $about = $this->About->patchEntity($about, $this->request->getData());
            if ($this->About->save($about)) {
                $this->Flash->success(__('A informação de: {0} foi salva', $about->title));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A informação de: {0} nao pode ser salva, tente novamente', $about->title));
        }
        $this->set(compact('about'));
    }



    public function edit($id = null)
    {
        $about = $this->About->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $about = $this->About->patchEntity($about, $this->request->getData());
            if ($this->About->save($about)) {
                $this->Flash->success(__('A informação de: {0} foi alterada', $about->title));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A informação de: {0} nao pode ser alterada, tente novamente', $about->title));
        }
        $this->set(compact('about'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $about = $this->About->get($id);
        if ($this->About->delete($about)) {
            $this->Flash->success(__('A informação de: {0} foi excluida', $about->title));
        } else {
            $this->Flash->error(__('A informação de: {0} nao pode ser excluida, tente novamente', $about->title));
        }

        return $this->redirect(['action' => 'index']);
    }
}
