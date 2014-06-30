<?php
class PdfsController extends AppController {
     var  $uses = null;
     var  $helpers = array('Pdf');
      
     function index($id = null) {
	 $this->loadModel('Order');
	
		$ord = $this->Order->find('first', array('conditions' => array('Order.id' => 22)));
		$this->set('order', $order);
        $this->layout='pdf';       
     }
}
?>