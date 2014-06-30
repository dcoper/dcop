<?php
App::uses('AppController', 'Controller');
/**
 * Orders Controller
 *
 * @property Order $Order
 * @property PaginatorComponent $Paginator
 */
class OrdersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $helpers = array('Lang');
	public $components = array('Paginator','EventRegister','RequestHandler');
	

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Order->recursive = 0;
		$this->set('orders', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function getExternalOrder($id = null) {
		$this->loadModel('OrdersLine');
		$orderslines = $this->OrdersLine->find('all', array('conditions' => array('OrdersLine.order_id' => $id)));
		$this->set('ordersLines', $orderslines,$this->Paginator->paginate());
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
		$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
		$this->set('order', $this->Order->find('first', $options));
	}
	
	public function view($id = null) {
		$this->loadModel('OrdersLine');
		$orderslines = $this->OrdersLine->find('all', array('conditions' => array('OrdersLine.order_id' => $id)));
		$this->set('ordersLines', $orderslines,$this->Paginator->paginate());
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
		$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
		$this->set('order', $this->Order->find('first', $options));
		
		$this->pdfConfig = array(
                'orientation' => 'portrait',
                'filename' => 'Order_' . $id
            );
            $this->set('order', $this->Order->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		if ($this->request->is('post')) {
			$this->Order->create();
			$this->request->data('Order.user_id',$this->Auth->user('id'));
			$this->request->data('Order.status_id',1);						
				
			if ($this->Order->save($this->request->data)) {		
				$this->EventRegister->addEvent(2,1,2);
				$this->Session->setFlash(__('The order has been saved.'));		
				return $this->redirect(array('controller' => 'orderslines', 'action' => 'add','?' => array('ordid' => $this->Order->id, 'lineid' => 1)));
			} else {
				$this->Session->setFlash(__('The order could not be saved. Please, try again.'));
			}
		}
		$users = $this->Order->User->find('list');
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
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Order->save($this->request->data)) {
				$this->Session->setFlash(__('The order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
			$this->request->data = $this->Order->find('first', $options);
		}
		$users = $this->Order->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Order->id = $id;
		if (!$this->Order->exists()) {
			throw new NotFoundException(__('Invalid order'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Order->delete()) {
			$this->Session->setFlash(__('The order has been deleted.'));
		} else {
			$this->Session->setFlash(__('The order could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function view_pdf($id = null) {
	$this->Order->id = $id;
	if (!$this->Order->exists()) {
		throw new NotFoundException(__('Invalid order'));
	}
	// increase memory limit in PHP 
	ini_set('memory_limit', '512M');
	$this->set('order', $this->Order->read(null, $id));
}
}
