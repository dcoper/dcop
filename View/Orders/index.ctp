<div class="orders index">
	<h2><?php echo __('Orders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('dcop_userid'); ?></th>
			<th><?php echo $this->Paginator->sort('ship_to_customerid'); ?></th>
			<th><?php echo $this->Paginator->sort('ship_to_street'); ?></th>
			<th><?php echo $this->Paginator->sort('ship_to_city'); ?></th>
			<th><?php echo $this->Paginator->sort('ship_to_state'); ?></th>
			<th><?php echo $this->Paginator->sort('ship_to_country'); ?></th>
			<th><?php echo $this->Paginator->sort('external_orderid'); ?></th>
			<th><?php echo $this->Paginator->sort('requested_delivery_date'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('comments'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($orders as $order): ?>
	<tr>
		<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($order['User']['id'], array('controller' => 'users', 'action' => 'view', $order['User']['id'])); ?>
		</td>
		<td><?php echo h($order['Order']['dcop_userid']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['ship_to_customerid']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['ship_to_street']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['ship_to_city']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['ship_to_state']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['ship_to_country']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['external_orderid']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['requested_delivery_date']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['status']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['comments']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $order['Order']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $order['Order']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $order['Order']['id']), array(), __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
