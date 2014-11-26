<div class="modalidades view">
<h2><?php echo __('Modalidade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($modalidade['Modalidade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($modalidade['Modalidade']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($modalidade['Modalidade']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($modalidade['Modalidade']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($modalidade['Modalidade']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Modalidade'), array('action' => 'edit', $modalidade['Modalidade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Modalidade'), array('action' => 'delete', $modalidade['Modalidade']['id']), array(), __('Are you sure you want to delete # %s?', $modalidade['Modalidade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Modalidades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modalidade'), array('action' => 'add')); ?> </li>
	</ul>
</div>
