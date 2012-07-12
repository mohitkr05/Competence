<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {
var $helpers = array('Html', 'Form');

public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('register', 'logout');
    }

    
    
 public function isAuthorized($user)  {
 	
 	if (in_array($this->action, array('edit'))){
 		if($user['id']!= $this->request->params['pass'][0]){
 			
 			return false;
 		}
 		return true;
 		
 		
 	}
 	
 } 
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
 
 
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$certifications = $this->User->Certification->find('list');
		$customers = $this->User->Customer->find('list');
		$educations = $this->User->Education->find('list');
		$skills = $this->User->Skill->find('list');
		$technologies = $this->User->Technology->find('list');
		$vendors = $this->User->Vendor->find('list');
		$this->set(compact('certifications', 'customers', 'educations', 'skills', 'technologies', 'vendors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
 
 
	public function edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
		$certifications = $this->User->Certification->find('list');
		$customers = $this->User->Customer->find('list');
		$educations = $this->User->Education->find('list');
		$skills = $this->User->Skill->find('list');
		$technologies = $this->User->Technology->find('list');
		$vendors = $this->User->Vendor->find('list');
		$this->set(compact('certifications', 'customers', 'educations', 'skills', 'technologies', 'vendors'));
	}
	
	
function register() {
      if (!empty($this->data)) {
	  
if (isset($this->data['User']['password_confirm']) && $data['password'] == $this->data['User']['password_confirm'])	  
//          if ($this->data['User']['password'] == $this->Auth->password($this->data['User']['password_confirm']))
		  {
              $this->User->create();
              $this->User->save($this->data);
              $this->redirect(array('action' => 'index'));
			  }
			  }
			  }

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void

	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
 */
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	
	public function login() {
	if ($this->request->is('post')){
        if ($this->Auth->login()) {
            $this->redirect($this->Auth->redirect());
        } else {
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }
	}
	
	
	public function logout() {
    $this->Session->setFlash('Good-Bye');
    $this->redirect($this->Auth->logout());

	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$certifications = $this->User->Certification->find('list');
		$customers = $this->User->Customer->find('list');
		$educations = $this->User->Education->find('list');
		$skills = $this->User->Skill->find('list');
		$technologies = $this->User->Technology->find('list');
		$vendors = $this->User->Vendor->find('list');
		$this->set(compact('certifications', 'customers', 'educations', 'skills', 'technologies', 'vendors'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
		$certifications = $this->User->Certification->find('list');
		$customers = $this->User->Customer->find('list');
		$educations = $this->User->Education->find('list');
		$skills = $this->User->Skill->find('list');
		$technologies = $this->User->Technology->find('list');
		$vendors = $this->User->Vendor->find('list');
		$this->set(compact('certifications', 'customers', 'educations', 'skills', 'technologies', 'vendors'));
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
}
