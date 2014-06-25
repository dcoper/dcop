<div class="ordersLines view">
<h2><?php echo __('Orders Line'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ordersLine['OrdersLine']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ordersLine['Order']['id'], array('controller' => 'orders', 'action' => 'view', $ordersLine['Order']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Line Number'); ?></dt>
		<dd>
			<?php echo h($ordersLine['OrdersLine']['line_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ordersLine['Product']['id'], array('controller' => 'products', 'action' => 'view', $ordersLine['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($ordersLine['OrdersLine']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uom'); ?></dt>
		<dd>
			<?php echo h($ordersLine['OrdersLine']['uom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($ordersLine['OrdersLine']['comments']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Orders Line'), array('action' => 'edit', $ordersLine['OrdersLine']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Orders Line'), array('action' => 'delete', $ordersLine['OrdersLine']['id']), array(), __('Are you sure you want to delete # %s?', $ordersLine['OrdersLine']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders Lines'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orders Line'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
