<?php
namespace App\Controller;

use App\Controller\AppController;


class StaffsController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $staffs = $this->paginate($this->Staffs);

        $this->set(compact('staffs'));
    }


    public function view($id = null)
    {
        $staff = $this->Staffs->get($id, [
            'contain' => ['Categories', 'StaffPosts']
        ]);

        $this->set('staff', $staff);
    }

    public function add()
    {
        $staff = $this->Staffs->newEntity();
        if ($this->request->is('post')) {
            $staff = $this->Staffs->patchEntity($staff, $this->request->getData());
            if ($this->Staffs->save($staff)) {
                $this->Flash->success(__('O Cargo: {0} foi salvo com sucesso', $staff->staff));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Cargo: {0} Nao pode ser salvo,tente novamente', $staff->staff));
        }
        $categories = $this->Staffs->Categories->find('list', ['limit' => 200]);
        $this->set(compact('staff', 'categories'));
    }


    public function edit($id = null)
    {
        $staff = $this->Staffs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $staff = $this->Staffs->patchEntity($staff, $this->request->getData());
            if ($this->Staffs->save($staff)) {
                $this->Flash->success(__('O Cargo: {0} foi alterado com sucesso', $staff->staff));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Cargo: {0} Nao pode ser alterado,tente novamente', $staff->staff));
        }
        $categories = $this->Staffs->Categories->find('list', ['limit' => 200]);
        $this->set(compact('staff', 'categories'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $staff = $this->Staffs->get($id);
        if ($this->Staffs->delete($staff)) {
            $this->Flash->success(__('O Cargo: {0} foi excluido com sucesso', $staff->staff));
        } else {
            $this->Flash->error(__('O Cargo: {0} Nao pode ser excluido,tente novamente', $staff->staff));
        }

        return $this->redirect(['action' => 'index']);
    }
}
