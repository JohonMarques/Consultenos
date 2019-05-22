<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Galleries Controller
 *
 * @property \App\Model\Table\GalleriesTable $Galleries
 *
 * @method \App\Model\Entity\Gallery[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GalleriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $galleries = $this->paginate($this->Galleries);

        $this->set(compact('galleries'));
    }

    /**
     * View method
     *
     * @param string|null $id Gallery id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gallery = $this->Galleries->get($id, [
            'contain' => ['Categories']
        ]);

        $this->set('gallery', $gallery);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gallery = $this->Galleries->newEntity();
        if ($this->request->is('post')) {
            $gallery = $this->Galleries->patchEntity($gallery, $this->request->getData());
            if ($this->Galleries->save($gallery)) {
                $this->Flash->success(__('The {0} has been saved.', 'Gallery'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Gallery'));
        }
        $categories = $this->Galleries->Categories->find('list', ['limit' => 200]);
        $this->set(compact('gallery', 'categories'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Gallery id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gallery = $this->Galleries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gallery = $this->Galleries->patchEntity($gallery, $this->request->getData());
            if ($this->Galleries->save($gallery)) {
                $this->Flash->success(__('The {0} has been saved.', 'Gallery'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Gallery'));
        }
        $categories = $this->Galleries->Categories->find('list', ['limit' => 200]);
        $this->set(compact('gallery', 'categories'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Gallery id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gallery = $this->Galleries->get($id);
        if ($this->Galleries->delete($gallery)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Gallery'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Gallery'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function gallery(){
        $this->viewBuilder()->setLayout('site');
        $this->loadModel('Categories');

        $images = $this->Galleries->find('all');
        $categories = $this->Categories->find('all', ['order'=> ['Categories.name']]);

        $this->set('images', $images);
        $this->set('categories', $categories);


    }
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('gallery');
    }
    public function teste(){
        $this->viewBuilder()->setLayout('site');

    }
}
