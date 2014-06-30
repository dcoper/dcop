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