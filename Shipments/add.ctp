<div class="shipments form">
<?php echo $this->Form->create('Shipment'); ?>
	<fieldset>
		<legend><?php echo __('Add Shipment'); ?></legend>
	<?php
//		echo $this->Form->input('order_id',);
        echo $this->Html->link(__($currenOrder['Order']['id']), array('controller' => 'orders', 'action' => 'view'));
//		echo $this->Form->input('asn_id');
//		echo $this->Form->input('status_id');
		echo $this->Form->input('tracking_number');
		echo $this->Form->input('weight');
//		echo $this->Form->input('user_id');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Shipments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Asns'), array('controller' => 'asns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asn'), array('controller' => 'asns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
