<div class="shipments view">
<h2><?php echo __('Shipment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($shipment['Shipment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo $this->Html->link($shipment['Order']['id'], array('controller' => 'orders', 'action' => 'view', $shipment['Order']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asn'); ?></dt>
		<dd>
			<?php echo $this->Html->link($shipment['Asn']['id'], array('controller' => 'asns', 'action' => 'view', $shipment['Asn']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($shipment['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $shipment['Status']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tracking Number'); ?></dt>
		<dd>
			<?php echo h($shipment['Shipment']['tracking_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($shipment['User']['id'], array('controller' => 'users', 'action' => 'view', $shipment['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($shipment['Shipment']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($shipment['Shipment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($shipment['Shipment']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Shipment'), array('action' => 'edit', $shipment['Shipment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Shipment'), array('action' => 'delete', $shipment['Shipment']['id']), array(), __('Are you sure you want to delete # %s?', $shipment['Shipment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Shipments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shipment'), array('action' => 'add')); ?> </li>
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
