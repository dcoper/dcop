<div class="packagingMaterials view">
<h2><?php echo __('Packaging Material'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($packagingMaterial['PackagingMaterial']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($packagingMaterial['PackagingMaterial']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Packaging Material'), array('action' => 'edit', $packagingMaterial['PackagingMaterial']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Packaging Material'), array('action' => 'delete', $packagingMaterial['PackagingMaterial']['id']), array(), __('Are you sure you want to delete # %s?', $packagingMaterial['PackagingMaterial']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Packaging Materials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Packaging Material'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($packagingMaterial['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Uom'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Width'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Depth'); ?></th>
		<th><?php echo __('Barcode'); ?></th>
		<th><?php echo __('Barcode Standards Id'); ?></th>
		<th><?php echo __('Part Number'); ?></th>
		<th><?php echo __('Packaging Material Id'); ?></th>
		<th><?php echo __('Packaging Instructions'); ?></th>
		<th><?php echo __('Value'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Ebay Itemlist Url'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($packagingMaterial['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['user_id']; ?></td>
			<td><?php echo $product['description']; ?></td>
			<td><?php echo $product['group_id']; ?></td>
			<td><?php echo $product['uom']; ?></td>
			<td><?php echo $product['weight']; ?></td>
			<td><?php echo $product['width']; ?></td>
			<td><?php echo $product['height']; ?></td>
			<td><?php echo $product['depth']; ?></td>
			<td><?php echo $product['barcode']; ?></td>
			<td><?php echo $product['barcode_standards_id']; ?></td>
			<td><?php echo $product['part_number']; ?></td>
			<td><?php echo $product['packaging_material_id']; ?></td>
			<td><?php echo $product['packaging_instructions']; ?></td>
			<td><?php echo $product['value']; ?></td>
			<td><?php echo $product['status_id']; ?></td>
			<td><?php echo $product['ebay_itemlist_url']; ?></td>
			<td><?php echo $product['created']; ?></td>
			<td><?php echo $product['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), array(), __('Are you sure you want to delete # %s?', $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
