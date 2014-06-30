<div class="ordersLines index">
	<h2><?php echo __('Orders Lines'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('order_id'); ?></th>
			<th><?php echo $this->Paginator->sort('line_number'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('uom'); ?></th>
			<th><?php echo $this->Paginator->sort('comments'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ordersLines as $ordersLine): ?>
	<tr>
		<td><?php echo h($ordersLine['OrdersLine']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ordersLine['Order']['id'], array('controller' => 'orders', 'action' => 'view', $ordersLine['Order']['id'])); ?>
		</td>
		<td><?php echo h($ordersLine['OrdersLine']['line_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ordersLine['Product']['id'], array('controller' => 'products', 'action' => 'view', $ordersLine['Product']['id'])); ?>
		</td>
		<td><?php echo h($ordersLine['OrdersLine']['quantity']); ?>&nbsp;</td>
		<td><?php echo h($ordersLine['OrdersLine']['uom']); ?>&nbsp;</td>
		<td><?php echo h($ordersLine['OrdersLine']['comments']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ordersLine['OrdersLine']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ordersLine['OrdersLine']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ordersLine['OrdersLine']['id']), array(), __('Are you sure you want to delete # %s?', $ordersLine['OrdersLine']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Orders Line'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
