<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Add Product'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('group_id');
		echo $this->Form->input('uom', array('options' => array('PC' => 'PC','KG' => 'KG'),'empty' => '(choose one)'));
		echo $this->Form->input('weight');
		echo $this->Form->input('width');
		echo $this->Form->input('height');
		echo $this->Form->input('barcode');
		echo $this->Form->input('barcode_standards_id', array('options' => array('EAN' => 'EAN','UPC' => 'UPC','ISBN' => 'ISBN'),'empty' => '(choose one)'));		
		echo $this->Form->input('part_number',array('label' => 'SKU/Part Number'));
		echo $this->Form->input('packaging_material_id', array('options' => array('Envelope' => 'Envelope','Padded Envelope' => 'Padded Envelope','Small Box' => 'Small Box'),'empty' => '(choose one)'));
		echo $this->Form->input('packaging_instructions');
		echo $this->Form->input('value');
		// echo $this->Form->input('status_id',array('options' => array('draft' => 'Draft','released' => 'Released','blocked' => 'Blocked'),'empty' => '(choose one)'));
		echo $this->Form->input('status_id');
		echo $this->Form->input('ebay_itemlist_url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
