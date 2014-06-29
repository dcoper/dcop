<?php
App::uses('AppController', 'Controller');
/**
 * OrdersLines Controller
 *
 * @property OrdersLine $OrdersLine
 * @property PaginatorComponent $Paginator
 */
class OrdersLinesController extends AppController {

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
		$this->OrdersLine->recursive = 0;
		$this->set('ordersLines', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OrdersLine->exists($id)) {
			throw new NotFoundException(__('Invalid orders line'));
		}
		$options = array('conditions' => array('OrdersLine.' . $this->OrdersLine->primaryKey => $id));
		$this->set('ordersLine', $this->OrdersLine->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	   $this->loadModel('Product');
	//   $this->loadModel('Product');
		
	
		if ($this->request->is('post')) {
		    
			$this->OrdersLine->create();
			
			//Search by SKU if product_id is empty
			if(empty($this->data['OrdersLine']['product_id']))
			{
			$productsid = $this->Product->find('first', array('conditions' => array('Product.part_number' => $this->data['OrdersLine']['sku'])));
			$this->request->data('OrdersLine.product_id',$productsid['Product']['id']);
			if(empty($productsid))
			{
				$this->Session->setFlash(__('Could not find SKU.'));
				$this->redirect(array('controller' => 'orderslines', 'action' => 'add','?' => array('ordid' => $this->request->query['ordid'], 'lineid' => ($this->request->query['lineid'] ))));
				}
			} else {
			$this->request->data('OrdersLine.product_id',$this->data['OrdersLine']['product_id']);
			}
			$this->request->data('OrdersLine.status_id',1);
			$this->request->data('OrdersLine.order_id',$this->request->query['ordid']);
			$this->request->data('OrdersLine.line_number',$this->request->query['lineid']);
			$this->request->data('OrdersLine.user_id',$this->Auth->user('id'));
			if ($this->OrdersLine->save($this->request->data)) {
				$this->Session->setFlash(__('The orders line has been saved.'));
				return $this->redirect(array('controller' => 'orderslines', 'action' => 'add','?' => array('ordid' => $this->request->query['ordid'], 'lineid' => ($this->request->query['lineid'] + 1 ))));
			} else {
				$this->Session->setFlash(__('The orders line could not be saved. Please, try again.'));
			}
		}
		$currenOrder = $this->OrdersLine->Order->find('first', array('conditions' => array('Order.id' => $this->request->query['ordid'])));
		$orders = $this->OrdersLine->Order->find('list');
		$products = $this->OrdersLine->Product->find('list');
		$this->set(compact('orders', 'products','currenOrder'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->OrdersLine->exists($id)) {
			throw new NotFoundException(__('Invalid orders line'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->OrdersLine->save($this->request->data)) {
				$this->Session->setFlash(__('The orders line has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orders line could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OrdersLine.' . $this->OrdersLine->primaryKey => $id));
			$this->request->data = $this->OrdersLine->find('first', $options);
		}
		$orders = $this->OrdersLine->Order->find('list');
		$products = $this->OrdersLine->Product->find('list');
		$this->set(compact('orders', 'products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->OrdersLine->id = $id;
		if (!$this->OrdersLine->exists()) {
			throw new NotFoundException(__('Invalid orders line'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->OrdersLine->delete()) {
			$this->Session->setFlash(__('The orders line has been deleted.'));
		} else {
			$this->Session->setFlash(__('The orders line could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
