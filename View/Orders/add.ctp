<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><?php echo __('Add Order'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('dcop_userid');
		echo $this->Form->input('ship_to_customerid');
		echo $this->Form->input('ship_to_street');
		echo $this->Form->input('ship_to_city');
		echo $this->Form->input('ship_to_state');
		echo $this->Form->input('ship_to_country');
		echo $this->Form->input('external_orderid');
		echo $this->Form->input('requested_delivery_date');
		echo $this->Form->input('status');
		echo $this->Form->input('comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
