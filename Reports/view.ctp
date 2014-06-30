<div class="orders view">
<?php echo $this->Html->link(__('PDF'), array('action' => 'view_pdf', 'ext' => 'pdf', $order['Order']['id'])); ?>
<h2><?php echo __('Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['User']['id'], array('controller' => 'users', 'action' => 'view', $order['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dcop Userid'); ?></dt>
		<dd>
			<?php echo h($order['Order']['dcop_userid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer Name'); ?></dt>
		<dd>
			<?php echo h($order['Order']['ship_to_customerid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($order['Order']['ship_to_street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($order['Order']['ship_to_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($order['Order']['ship_to_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($order['Order']['ship_to_country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('External Orderid'); ?></dt>
		<dd>
			<?php echo h($order['Order']['external_orderid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requested Delivery Date'); ?></dt>
		<dd>
			<?php echo h($order['Order']['requested_delivery_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($order['Order']['status_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($order['Order']['comments']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="ordersLines index">
	<h2><?php echo __('Orders Lines'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('order_id'); ?></th>
			<th><?php echo $this->Paginator->sort('line_number'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('comments'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ordersLines as $ordersLine): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($ordersLine['Order']['id'], array('controller' => 'orders', 'action' => 'view', $ordersLine['Order']['id'])); ?>
		</td>
		<td><?php echo h($ordersLine['OrdersLine']['line_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ordersLine['Product']['description'], array('controller' => 'products', 'action' => 'view', $ordersLine['Product']['id'])); ?>
		</td>
		<td><?php echo h($ordersLine['OrdersLine']['quantity']); ?>&nbsp;</td>
		<td><?php echo h($ordersLine['OrdersLine']['comments']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('controller' => 'orderslines','action' => 'view', $ordersLine['OrdersLine']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('controller' => 'orderslines','action' => 'edit', $ordersLine['OrdersLine']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orderslines','action' => 'delete', $ordersLine['OrdersLine']['id']), array(), __('Are you sure you want to delete # %s?', $ordersLine['OrdersLine']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Edit Order'), array('action' => 'edit', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order'), array('action' => 'delete', $order['Order']['id']), array(), __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Create Shipment From Order'), array('controller' => 'shipments', 'action' => 'add',$order['Order']['id'])); ?> </li>
		
		
		
	</ul>
</div>
