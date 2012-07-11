<?php
App::uses('AppController', 'Controller');
/**
 * Certifications Controller
 *
 * @property Certification $Certification
 */
class CertificationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Certification->recursive = 0;
		$this->set('certifications', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Certification->id = $id;
		if (!$this->Certification->exists()) {
			throw new NotFoundException(__('Invalid certification'));
		}
		$this->set('certification', $this->Certification->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Certification->create();
			if ($this->Certification->save($this->request->data)) {
				$this->Session->setFlash(__('The certification has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The certification could not be saved. Please, try again.'));
			}
		}
		$users = $this->Certification->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Certification->id = $id;
		if (!$this->Certification->exists()) {
			throw new NotFoundException(__('Invalid certification'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Certification->save($this->request->data)) {
				$this->Session->setFlash(__('The certification has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The certification could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Certification->read(null, $id);
		}
		$users = $this->Certification->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Certification->id = $id;
		if (!$this->Certification->exists()) {
			throw new NotFoundException(__('Invalid certification'));
		}
		if ($this->Certification->delete()) {
			$this->Session->setFlash(__('Certification deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Certification was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Certification->recursive = 0;
		$this->set('certifications', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Certification->id = $id;
		if (!$this->Certification->exists()) {
			throw new NotFoundException(__('Invalid certification'));
		}
		$this->set('certification', $this->Certification->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Certification->create();
			if ($this->Certification->save($this->request->data)) {
				$this->Session->setFlash(__('The certification has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The certification could not be saved. Please, try again.'));
			}
		}
		$users = $this->Certification->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Certification->id = $id;
		if (!$this->Certification->exists()) {
			throw new NotFoundException(__('Invalid certification'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Certification->save($this->request->data)) {
				$this->Session->setFlash(__('The certification has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The certification could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Certification->read(null, $id);
		}
		$users = $this->Certification->User->find('list');
		$this->set(compact('users'));
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
		$this->Certification->id = $id;
		if (!$this->Certification->exists()) {
			throw new NotFoundException(__('Invalid certification'));
		}
		if ($this->Certification->delete()) {
			$this->Session->setFlash(__('Certification deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Certification was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
