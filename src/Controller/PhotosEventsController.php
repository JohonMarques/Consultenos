<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PhotosEvents Controller
 *
 * @property \App\Model\Table\PhotosEventsTable $PhotosEvents
 *
 * @method \App\Model\Entity\PhotosEvent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PhotosEventsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Events']
        ];
        $photosEvents = $this->paginate($this->PhotosEvents);

        $this->set(compact('photosEvents'));
    }

    /**
     * View method
     *
     * @param string|null $id Photos Event id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $photosEvent = $this->PhotosEvents->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('photosEvent', $photosEvent);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $photosEvent = $this->PhotosEvents->newEntity();
        if ($this->request->is('post')) {
            $photosEvent = $this->PhotosEvents->patchEntity($photosEvent, $this->request->getData());
            if ($this->PhotosEvents->save($photosEvent)) {
                $this->Flash->success(__('The {0} has been saved.', 'Photos Event'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Photos Event'));
        }
        $events = $this->PhotosEvents->Events->find('list', ['limit' => 200]);
        $this->set(compact('photosEvent', 'events'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Photos Event id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $photosEvent = $this->PhotosEvents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $photosEvent = $this->PhotosEvents->patchEntity($photosEvent, $this->request->getData());
            if ($this->PhotosEvents->save($photosEvent)) {
                $this->Flash->success(__('The {0} has been saved.', 'Photos Event'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Photos Event'));
        }
        $events = $this->PhotosEvents->Events->find('list', ['limit' => 200]);
        $this->set(compact('photosEvent', 'events'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Photos Event id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $photosEvent = $this->PhotosEvents->get($id);
        if ($this->PhotosEvents->delete($photosEvent)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Photos Event'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Photos Event'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
