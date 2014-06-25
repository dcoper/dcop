<div class="orders view">
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
		<dt><?php echo __('Ship To Customerid'); ?></dt>
		<dd>
			<?php echo h($order['Order']['ship_to_customerid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ship To Street'); ?></dt>
		<dd>
			<?php echo h($order['Order']['ship_to_street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ship To City'); ?></dt>
		<dd>
			<?php echo h($order['Order']['ship_to_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ship To State'); ?></dt>
		<dd>
			<?php echo h($order['Order']['ship_to_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ship To Country'); ?></dt>
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
			<?php echo h($order['Order']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($order['Order']['comments']); ?>
			&nbsp;
		</dd>
	</dl>
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
	</ul>
</div>
