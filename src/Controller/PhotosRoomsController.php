<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PhotosRooms Controller
 *
 * @property \App\Model\Table\PhotosRoomsTable $PhotosRooms
 *
 * @method \App\Model\Entity\PhotosRoom[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PhotosRoomsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Rooms']
        ];
        $photosRooms = $this->paginate($this->PhotosRooms);

        $this->set(compact('photosRooms'));
    }

    /**
     * View method
     *
     * @param string|null $id Photos Room id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $photosRoom = $this->PhotosRooms->get($id, [
            'contain' => ['Rooms']
        ]);

        $this->set('photosRoom', $photosRoom);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $photosRoom = $this->PhotosRooms->newEntity();
        if ($this->request->is('post')) {
            $photosRoom = $this->PhotosRooms->patchEntity($photosRoom, $this->request->getData());
            if ($this->PhotosRooms->save($photosRoom)) {
                $this->Flash->success(__('The {0} has been saved.', 'Photos Room'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Photos Room'));
        }
        $rooms = $this->PhotosRooms->Rooms->find('list', ['limit' => 200]);
        $this->set(compact('photosRoom', 'rooms'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Photos Room id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $photosRoom = $this->PhotosRooms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $photosRoom = $this->PhotosRooms->patchEntity($photosRoom, $this->request->getData());
            if ($this->PhotosRooms->save($photosRoom)) {
                $this->Flash->success(__('The {0} has been saved.', 'Photos Room'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Photos Room'));
        }
        $rooms = $this->PhotosRooms->Rooms->find('list', ['limit' => 200]);
        $this->set(compact('photosRoom', 'rooms'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Photos Room id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $photosRoom = $this->PhotosRooms->get($id);
        if ($this->PhotosRooms->delete($photosRoom)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Photos Room'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Photos Room'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
