<div class="packagingMaterials form">
<?php echo $this->Form->create('PackagingMaterial'); ?>
	<fieldset>
		<legend><?php echo __('Edit Packaging Material'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PackagingMaterial.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('PackagingMaterial.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Packaging Materials'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
