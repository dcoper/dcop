<?php
App::uses('AppController', 'Controller');
/**
 * Shipments Controller
 *
 * @property Shipment $Shipment
 * @property PaginatorComponent $Paginator
 */
class ShipmentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Shipment->recursive = 0;
		$this->set('shipments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Shipment->exists($id)) {
			throw new NotFoundException(__('Invalid shipment'));
		}
		$options = array('conditions' => array('Shipment.' . $this->Shipment->primaryKey => $id));
		// currently, only one order per shipment, in the future - one shipment many orders
		$order = $this->Shipment->Order->find('first', array('conditions' => array('Order.id' => 23)));
		$this->set('order',$order);
		$this->set('shipment', $this->Shipment->find('first', $options));
	}
	
	
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Shipment->create();
			$this->request->data('Shipment.user_id',$this->Auth->user('id'));
			$this->request->data('Shipment.status_id',1);
			$this->request->data('Shipment.order_id',$this->request->params['pass'][0]);
			if ($this->Shipment->save($this->request->data)) {
				$this->Session->setFlash(__('The shipment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shipment could not be saved. Please, try again.'));
			}
		}
		$currenOrder = $this->Shipment->Order->find('first', array('conditions' => array('Order.id' => $this->request->params['pass'][0])));
		$orders = $this->Shipment->Order->find('list');
		$asns = $this->Shipment->Asn->find('list');
		$statuses = $this->Shipment->Status->find('list');
		$users = $this->Shipment->User->find('list');
		$this->set(compact('orders', 'asns', 'statuses', 'users','currenOrder'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Shipment->exists($id)) {
			throw new NotFoundException(__('Invalid shipment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Shipment->save($this->request->data)) {
				$this->Session->setFlash(__('The shipment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shipment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Shipment.' . $this->Shipment->primaryKey => $id));
			$this->request->data = $this->Shipment->find('first', $options);
		}
		$orders = $this->Shipment->Order->find('list');
		$asns = $this->Shipment->Asn->find('list');
		$statuses = $this->Shipment->Status->find('list');
		$users = $this->Shipment->User->find('list');
		$this->set(compact('orders', 'asns', 'statuses', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Shipment->id = $id;
		if (!$this->Shipment->exists()) {
			throw new NotFoundException(__('Invalid shipment'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Shipment->delete()) {
			$this->Session->setFlash(__('The shipment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The shipment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
