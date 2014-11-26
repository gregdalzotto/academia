<div class="alunos view">
<h2><?php echo __('Aluno'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereco'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['endereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bairro'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['bairro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Complemento'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['complemento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cep'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['cep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['cidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vencimento'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['vencimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($aluno['Aluno']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aluno'), array('action' => 'edit', $aluno['Aluno']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aluno'), array('action' => 'delete', $aluno['Aluno']['id']), array(), __('Are you sure you want to delete # %s?', $aluno['Aluno']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mensalidades'), array('controller' => 'mensalidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mensalidade'), array('controller' => 'mensalidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Mensalidades'); ?></h3>
	<?php if (!empty($aluno['Mensalidade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Aluno Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Valor Pago'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($aluno['Mensalidade'] as $mensalidade): ?>
		<tr>
			<td><?php echo $mensalidade['id']; ?></td>
			<td><?php echo $mensalidade['aluno_id']; ?></td>
			<td><?php echo $mensalidade['data']; ?></td>
			<td><?php echo $mensalidade['status']; ?></td>
			<td><?php echo $mensalidade['valor']; ?></td>
			<td><?php echo $mensalidade['valor_pago']; ?></td>
			<td><?php echo $mensalidade['created']; ?></td>
			<td><?php echo $mensalidade['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mensalidades', 'action' => 'view', $mensalidade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mensalidades', 'action' => 'edit', $mensalidade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mensalidades', 'action' => 'delete', $mensalidade['id']), array(), __('Are you sure you want to delete # %s?', $mensalidade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mensalidade'), array('controller' => 'mensalidades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
