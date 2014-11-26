<div class="alunosHasModalidades index">
	<h2><?php echo __('Alunos Has Modalidades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('modalidade_id'); ?></th>
			<th><?php echo $this->Paginator->sort('aluno_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($alunosHasModalidades as $alunosHasModalidade): ?>
	<tr>
		<td><?php echo h($alunosHasModalidade['AlunosHasModalidade']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($alunosHasModalidade['Modalidade']['id'], array('controller' => 'modalidades', 'action' => 'view', $alunosHasModalidade['Modalidade']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($alunosHasModalidade['Aluno']['id'], array('controller' => 'alunos', 'action' => 'view', $alunosHasModalidade['Aluno']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $alunosHasModalidade['AlunosHasModalidade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $alunosHasModalidade['AlunosHasModalidade']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $alunosHasModalidade['AlunosHasModalidade']['id']), array(), __('Are you sure you want to delete # %s?', $alunosHasModalidade['AlunosHasModalidade']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Alunos Has Modalidade'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Modalidades'), array('controller' => 'modalidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modalidade'), array('controller' => 'modalidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
	</ul>
</div>
