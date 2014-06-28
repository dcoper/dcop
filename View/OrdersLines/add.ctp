<div class="ordersLines form">
<?php echo $this->Form->create('OrdersLine'); ?>
	<fieldset>

		<legend><?php echo __('Add Orders Line for order number');  ?></legend>
		<?php echo $this->Html->link(__($currenOrder['Order']['external_orderid']), array('controller' => 'orders', 'action' => 'view')); ?>
	
		
	<?php
	
		
	//	echo $this->Form->input('product_id')
		echo $this->Form->input('sku');
		echo $this->Form->input('quantity');
		echo $this->Form->input('comments');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Add Order Line')); ?>
<?php echo $this->Form->end(__('View & Complete Order')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Orders Lines'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>

	</ul>
</div>
