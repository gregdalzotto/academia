<div class="mensalidades form">
<?php echo $this->Form->create('Mensalidade'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mensalidade'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('aluno_id');
		echo $this->Form->input('data');
		echo $this->Form->input('status');
		echo $this->Form->input('valor');
		echo $this->Form->input('valor_pago');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Mensalidade.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Mensalidade.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mensalidades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
	</ul>
</div>
