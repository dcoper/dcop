<div class="barcodeStandards view">
<h2><?php echo __('Barcode Standard'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($barcodeStandard['BarcodeStandard']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($barcodeStandard['BarcodeStandard']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Barcode Standard'), array('action' => 'edit', $barcodeStandard['BarcodeStandard']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Barcode Standard'), array('action' => 'delete', $barcodeStandard['BarcodeStandard']['id']), array(), __('Are you sure you want to delete # %s?', $barcodeStandard['BarcodeStandard']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Barcode Standards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Barcode Standard'), array('action' => 'add')); ?> </li>
	</ul>
</div>
