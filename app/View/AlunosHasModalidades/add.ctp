<div class="alunosHasModalidades form">
<?php echo $this->Form->create('AlunosHasModalidade'); ?>
	<fieldset>
		<legend><?php echo __('Add Alunos Has Modalidade'); ?></legend>
	<?php
		echo $this->Form->input('modalidade_id');
		echo $this->Form->input('aluno_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Alunos Has Modalidades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Modalidades'), array('controller' => 'modalidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modalidade'), array('controller' => 'modalidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
	</ul>
</div>
