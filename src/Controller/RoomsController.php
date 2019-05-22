<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Rooms Controller
 *
 * @property \App\Model\Table\RoomsTable $Rooms
 *
 * @method \App\Model\Entity\Room[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RoomsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $rooms = $this->paginate($this->Rooms);

        $this->set(compact('rooms'));
    }

    /**
     * View method
     *
     * @param string|null $id Room id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $room = $this->Rooms->get($id, [
            'contain' => ['PhotosRooms']
        ]);

        $this->set('room', $room);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $room = $this->Rooms->newEntity();
        if ($this->request->is('post')) {
            $room = $this->Rooms->patchEntity($room, $this->request->getData());
            if ($this->Rooms->save($room)) {
                $this->Flash->success(__('The {0} has been saved.', 'Room'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Room'));
        }
        $this->set(compact('room'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Room id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $room = $this->Rooms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $room = $this->Rooms->patchEntity($room, $this->request->getData());
            if ($this->Rooms->save($room)) {
                $this->Flash->success(__('The {0} has been saved.', 'Room'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Room'));
        }
        $this->set(compact('room'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Room id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $room = $this->Rooms->get($id);
        if ($this->Rooms->delete($room)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Room'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Room'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function room($id){
        $this->viewBuilder()->setLayout('site');
        $this->loadModel('PhotosRooms');
        $rooms = $this->Rooms->find('all', ['conditions'=>['Rooms.id'=>$id]]);
        $images = $this->PhotosRooms->find('all', ['conditions'=>['PhotosRooms.room_id'=>$id]]);

        $this->set('rooms', $rooms);
        $this->set('images', $images);

    }

    public function allRooms(){
        $this->viewBuilder()->setLayout('site');
        $this->loadModel('PhotosRooms');
        $rooms = $this->Rooms->find('all', ['conditions'=>['Rooms.id >'=>0]]);
        $images = $this->PhotosRooms->find('all', ['conditions'=>['PhotosRooms.id >'=>0]]);

        $this->set('rooms', $rooms);
        $this->set('images', $images);

    }
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('room');
        $this->Auth->allow('allRooms');

    }
}
