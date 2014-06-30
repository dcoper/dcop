<div class="barcodeStandards form">
<?php echo $this->Form->create('BarcodeStandard'); ?>
	<fieldset>
		<legend><?php echo __('Add Barcode Standard'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Barcode Standards'), array('action' => 'index')); ?></li>
	</ul>
</div>
