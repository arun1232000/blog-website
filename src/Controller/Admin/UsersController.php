<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\EventInterface;
/**
 * Users Controller
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function beforeFilter(EventInterface $event){
        $this->viewBuilder()->setLayout("admin");
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function login(){
        if($this ->request -> is('post')){
           $user = $this->Auth->identify();
            // debug($user);
           if($user){
            $this->Auth->setUser($user);
           

            // debug($user);
            // exit;
            return $this->redirect(['controller' => 'Users', 'action' => 'home']);
           }
           else {
           
               $this->Flash->error('incorrect Username or password...!');
            }
           }
        
    }
    
    public function index()
    {
        $key=$this->request->getQuery('key');
        
        if($key){
            $query=$this->Users->findByUsernameOrEmail($key,$key);
            //  debug($u);
            //  exit;
        }else{
            $query=$this->Users;
        }
        $users = $this->paginate($query);
        // $username = $this->Auth->user('username');
        $this->set(compact('users'));
        // $this->set('username',$username);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            
            $user = $this->Users->patchEntity($user, $this->request->getData());
           
            if(!$user->getErrors()){
            $image = $this->request->getData('image_file');
         
            $name = $image->getClientFilename();

            if(!is_dir(WWW_ROOT . 'img' . DS . 'user_images')){
                 mkdir(WWW_ROOT . 'img' . DS . 'user_images',0775);
            }
            $targetPath = WWW_ROOT . 'img' . DS . 'user_images'.DS. $name;
            if($name){
            
               $image->moveTo($targetPath);
               
               $user->image = 'user_images/'.$name;
              
            }
        } 


            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function deleteAll(){
        $this->request->allowMethod(['post', 'delete']);
        $ids=$this->request->getData('ids');
       
        //  debug($ids);
        //  exit;
       if($this->Users->deleteAll(['Users.user_id IN'=>$ids])){
        $this->Flash->success(__('The users have been deleted.'));
       }
       return $this->redirect(['action' => 'index']);

    }
    public function logout() {
        $this->Flash->success('You have been logged out.');
        return $this->redirect($this->Auth->logout());
       
    }
    public function home(){

    }
   
    
}
