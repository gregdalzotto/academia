<div class="mensalidades view">
<h2><?php echo __('Mensalidade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mensalidade['Mensalidade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aluno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mensalidade['Aluno']['id'], array('controller' => 'alunos', 'action' => 'view', $mensalidade['Aluno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($mensalidade['Mensalidade']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($mensalidade['Mensalidade']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($mensalidade['Mensalidade']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor Pago'); ?></dt>
		<dd>
			<?php echo h($mensalidade['Mensalidade']['valor_pago']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($mensalidade['Mensalidade']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($mensalidade['Mensalidade']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mensalidade'), array('action' => 'edit', $mensalidade['Mensalidade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mensalidade'), array('action' => 'delete', $mensalidade['Mensalidade']['id']), array(), __('Are you sure you want to delete # %s?', $mensalidade['Mensalidade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mensalidades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mensalidade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
	</ul>
</div>
