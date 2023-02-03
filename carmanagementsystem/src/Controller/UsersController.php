<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadModel('Cars');
        $this->loadModel('Ratings');
        $this->loadModel('Brands');
        if ($this->Authentication->getIdentity()) {
            $auth = true;
        } else {
            $auth = false;
        }
        $this->set(compact('auth'));


        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $user = $this->Authentication->getIdentity();

        if ($this->Authentication->getIdentity()) {
            $login = true;
        } else {
            $login = false;
        }


        $key = $this->request->getQuery('key');
        if ($key) {
            $query = $this->Users->find('all')->where(['Name like' => '%' . $key . '%']);
        } else {
            $query = $this->Users;
        }

        $users = $this->paginate($query);
        $this->set(compact('users'));
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
            'contain' => ['Brands', 'Cars', 'Ratings'],
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


            if ($this->Users->save($user)) {
                $this->Flash->success(__(' has been saved.'));
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

    public function carindex()
    {
        $this->paginate = [
            'limit' => '5',
            'contain' => ['Brands'],
        ];
        $key = $this->request->getQuery('key');
        if ($key) {
            $query = $this->Cars->find('all')->where(['Model like' => '%' . $key . '%']);
        } else {
            $query = $this->Cars;
        }
        $cars = $this->paginate($query);
        $this->set(compact('cars'));
    }

    public function homepage()
    {
        $this->paginate = [
            'limit' => '6',
        ];
        $user = $this->Authentication->getIdentity();

        if ($this->Authentication->getIdentity()) {
            $login = true;
        } else {
            $login = false;
        }
        $key = $this->request->getQuery('key');

        if ($key) {
            $query = $this->Cars->find('all')->where(['Name like' => '%' . $key . '%']);
        } else {
            $query = $this->Cars->find('all')->where(['status' => 1]);
        }
        $cars = $this->paginate($query);
        $this->set(compact('cars', 'login', 'user'));
    }


    public function addcar()
    {
        $car = $this->Cars->newEmptyEntity();
        if ($this->request->is('post')) {
            $car = $this->Cars->patchEntity($car, $this->request->getData());
            if (!$car->getErrors) {
                $image = $this->request->getData('image_file');
                $name = $image->getClientFileName();
                $targetPath = WWW_ROOT . 'img' . DS . $name;
                if ($name)
                    $image->moveTo($targetPath);
                $car->image = $name;
            }

            if ($this->Cars->save($car)) {
                $this->Flash->success(__('The car has been saved.'));

                return $this->redirect(['action' => 'carindex']);
            }
            $this->Flash->error(__('The car could not be saved. Please, try again.'));
        }
        $users = $this->Cars->Users->find('list', ['limit' => 200])->all();
        $brands = $this->Cars->Brands->find('list', ['limit' => 200])->all();
        $this->set(compact('car', 'users', 'brands'));
    }


    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue

        $this->Authentication->addUnauthenticatedActions(['login', 'add']);
    }

    public function login()
    {
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result && $result->isValid()) {
            // $redirect = $this->request->getQuery('redirect', [
            //     'controller' => 'Articles',
            //     'action' => 'index',
            // ]);
            $user = $this->Authentication->getidentity();
            if ($user->Role == '0') {
                $redirect = $this->request->getQuery('redirect', ['controller' => 'Users', 'action' => 'index']);
            }
            if ($user->Role == '1') {
                $redirect = $this->request->getQuery('redirect', ['controller' => 'Users', 'action' => 'homepage']);
            }
            if ($user->status == '0') {
                $redirect = $this->request->getQuery('redirect', ['controller' => 'Users', 'action' => 'add']);
                $this->Flash->error(__('You are not an authorized user'));
                return $this->redirect(['controller' => 'Users', 'action' => 'logout']);

            }
            return $this->redirect($redirect);
            // $email = $this->request->getData('email');
            // $session = $this->getRequest()->getSession();
            // $session->write('email', $email);
        }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid username or password'));
        }
    }


    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result && $result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }
    }



    public function cardetail($id = null)
    {
        $overallstar = 0;
        $count = 0;
        $ratings = $this->Ratings->find('all')->where(['car_id' => $id])->order(['id' => 'DESC'])->all();
        if (!empty($car->rating)) {
            $array = json_decode(json_encode($ratings), true);

            $sum = 0;
            foreach ($array as $arr) {
                $sum += $arr['star'];
                $count++;
            }
            $overallstar = $sum / $count;
        }
        $user = $this->Authentication->getIdentity();
        if ($this->Authentication->getIdentity()) {
            $login = true;
            $user_id = $user->id;
            $name = $user->name;
        } else {
            $login = false;
        }
        $car = $this->Cars->get($id, [
            'contain' => ['Brands', 'Ratings'],
        ]);

        $rating = $this->Ratings->newEmptyEntity();
        if ($this->request->is('post')) {
            $results = $this->Ratings->find('all')->where(['car_id' => $id, 'user_id' => $user_id])->first();

            $data = $this->request->getData();
            $star = $this->request->getData('star');
            $rev = $this->request->getData('review');
            $data['rating'] = $star;
            $data['Review'] = $rev;
            // echo $rating;

            $result = $this->Ratings->patchEntity($rating, $data);
            // echo '<pre>';
            // print_r($result);
            // die();
            $rating['user_id'] = $user_id;
            $rating['car_id'] = $id;
            if ($this->Ratings->save($result)) {
                $this->Flash->success(__('Succesfully posted'));
            }
        }
        // $rating = $this->Ratings->newEmptyEntity();
        // if ($this->request->is('post')) {

        //     $rating = $this->Ratings->patchEntity($rating, $this->request->getData());
        //     $rating['user_id'] = $user_id;
        //     $rating['car_id'] = $id;
        //     if ($this->Ratings->save($rating)) {

        //         return $this->redirect(['action' => 'view', $id]);

        //     }
        // }
        $this->set(compact('car', 'rating', 'ratings', 'overallstar', 'count'));
    }



    public function userStatus($id = null, $status)
    {

        $this->request->allowMethod(['post']);
        $user = $this->Users->get($id);

        if ($status == 1)
            $user->status = 0;
        else
            $user->status = 1;

        if ($this->Users->save($user)) {
            $this->Flash->success(__('The users status has changed.'));
        }
        return $this->redirect(['action' => 'index']);
    }


    public function status($id = null, $status = null)
    {
        // $user = $this->Cars->find('all')->where(['id' => $id])->first();
        // $user->active = $status;

        $this->request->allowMethod(['post']);

        $car = $this->Cars->get($id);
        if ($status == 1) {
            $car->status = 0;
        } else {
            $car->status = 1;
        }
        if ($this->Cars->save($car)) {
            $this->Flash->success(__('The Car status has changed.'));

        }
        return $this->redirect(['controller' => 'Users', 'action' => 'carindex']);
    }




}