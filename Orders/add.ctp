<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><?php echo __('Add Order'); ?></legend>
	<?php
	
		echo $this->Form->input('ship_to_customerid',array('label' => 'Customer name'));
		echo $this->Form->input('ship_to_street',array('label' => 'Street'));
		echo $this->Form->input('ship_to_city',array('label' => 'City'));
		echo $this->Form->input('ship_to_zip',array('label' => 'Zip'));
		echo $this->Lang->countrySelect('Order.ship_to_country', array('label' => __('Country', true)  ));
        echo $this->Lang->stateSelect('Order.ship_to_state', array('label' => __('State', true)  ));		
		echo $this->Form->input('external_orderid',array('label' => 'Order Number'));
		echo $this->Form->input('requested_delivery_date',array('label' => 'Requested Delivery Date'));
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
