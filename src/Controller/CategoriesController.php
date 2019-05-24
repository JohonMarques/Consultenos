<?php
namespace App\Controller;

use App\Controller\AppController;


class CategoriesController extends AppController
{

    public function index()
    {
        $categories = $this->paginate($this->Categories);

        $this->set(compact('categories'));
    }


    public function view($id = null)
    {
        $category = $this->Categories->get($id);

        $this->set('category', $category);
    }



    public function add()
    {
        $category = $this->Categories->newEntity();
        if ($this->request->is('post')) {
            $category = $this->Categories->patchEntity($category, $this->request->getData());
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('A categoria {0} foi salva', $category->name));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A Categoria: {0} nao pode ser salva. Tente Novamente', $category->name));
        }
        $this->set(compact('category'));
    }


    public function edit($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $category = $this->Categories->patchEntity($category, $this->request->getData());
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('A categoria {0} foi alterada', $category->name));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A Categoria: {0} nao pode ser alterada. Tente Novamente', $category->name));
        }
        $this->set(compact('category'));
    }



    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $category = $this->Categories->get($id);
        if ($this->Categories->delete($category)) {
            $this->Flash->success(__('A categoria {0} foi excluida', $category->name));
        } else {
            $this->Flash->error(__('A Categoria: {0} nao pode ser excluida. Tente Novamente', $category->name));
        }

        return $this->redirect(['action' => 'index']);
    }

}
