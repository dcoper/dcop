<?php
App::uses('Component', 'Controller');
class EventRegisterComponent extends Component {
    public function addEvent($objecttypeid, $statusid,$userid) {
		$this->Event = ClassRegistry::init('Event');
		$this->Event->create();
        $this->Event->set('user_id',$userid);
	    $this->Event->set('object_type_id', $objecttypeid);
		$this->Event->set('status_id', $statusid);
	    if ($this->Event->save($this->request->data)) {			
				echo "";
			} else {
				echo "";
			}
    }
}

?>