<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * StaffPosts Controller
 *
 * @property \App\Model\Table\StaffPostsTable $StaffPosts
 *
 * @method \App\Model\Entity\StaffPost[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StaffPostsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Staffs']
        ];
        $staffPosts = $this->paginate($this->StaffPosts);

        $this->set(compact('staffPosts'));
    }

    /**
     * View method
     *
     * @param string|null $id Staff Post id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $staffPost = $this->StaffPosts->get($id, [
            'contain' => ['Staffs']
        ]);

        $this->set('staffPost', $staffPost);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $staffPost = $this->StaffPosts->newEntity();
        if ($this->request->is('post')) {
            $staffPost = $this->StaffPosts->patchEntity($staffPost, $this->request->getData());
            if ($this->StaffPosts->save($staffPost)) {
                $this->Flash->success(__('The {0} has been saved.', 'Staff Post'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Staff Post'));
        }
        $staffs = $this->StaffPosts->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('staffPost', 'staffs'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Staff Post id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $staffPost = $this->StaffPosts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $staffPost = $this->StaffPosts->patchEntity($staffPost, $this->request->getData());
            if ($this->StaffPosts->save($staffPost)) {
                $this->Flash->success(__('The {0} has been saved.', 'Staff Post'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Staff Post'));
        }
        $staffs = $this->StaffPosts->Staffs->find('list', ['limit' => 200]);
        $this->set(compact('staffPost', 'staffs'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Staff Post id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $staffPost = $this->StaffPosts->get($id);
        if ($this->StaffPosts->delete($staffPost)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Staff Post'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Staff Post'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function posts($staffId){
        $this->viewBuilder()->setLayout('site');
        $this->paginate = [
            'limit' => 3,
            'order' => [
                'StaffPosts.id' => 'asc'
            ]
        ];
        $posts = $this->StaffPosts->find('all')
            ->where(['staff_id' => $staffId])
            ->order(['id' => 'desc']);

        $this->set('posts', $this->paginate($posts));

        $this->loadPublicDependencies();

    }


    public function show($id)
    {
        $this->viewBuilder()->setLayout('site');

        $staffPost = $this->StaffPosts->get($id, [
            'contain' => ['Staffs']
        ]);


        $this->set('staffPost', $staffPost);

        $this->loadPublicDependencies();
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['posts','show']);
    }
}
