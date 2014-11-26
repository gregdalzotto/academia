<div class="alunosHasModalidades view">
<h2><?php echo __('Alunos Has Modalidade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($alunosHasModalidade['AlunosHasModalidade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modalidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alunosHasModalidade['Modalidade']['id'], array('controller' => 'modalidades', 'action' => 'view', $alunosHasModalidade['Modalidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aluno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alunosHasModalidade['Aluno']['id'], array('controller' => 'alunos', 'action' => 'view', $alunosHasModalidade['Aluno']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Alunos Has Modalidade'), array('action' => 'edit', $alunosHasModalidade['AlunosHasModalidade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Alunos Has Modalidade'), array('action' => 'delete', $alunosHasModalidade['AlunosHasModalidade']['id']), array(), __('Are you sure you want to delete # %s?', $alunosHasModalidade['AlunosHasModalidade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos Has Modalidades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alunos Has Modalidade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Modalidades'), array('controller' => 'modalidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modalidade'), array('controller' => 'modalidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
	</ul>
</div>
