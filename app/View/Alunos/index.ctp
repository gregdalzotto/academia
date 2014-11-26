
<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Alunos
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> alunos
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <!--h2>Bordered Table</h2-->
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Telefone</th>
                                        <th>Dia vencimento</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php foreach ($alunos as $aluno): ?>
                                    <tr>
                                            <td><?php echo h($aluno['Aluno']['nome']); ?>&nbsp;</td>
                                            <td><?php echo h($aluno['Aluno']['telefone']); ?>&nbsp;</td>
                                            <td><?php echo h($aluno['Aluno']['vencimento']); ?>&nbsp;</td>
                                            <td class="actions">
                                                    <?php echo $this->Html->tag('a', 'Editar', array('href' => 'aluno-editar-'.$aluno['Aluno']['id'])); ?>
                                                    <?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $aluno['Aluno']['id']), array(), __('Tem certeza que quer excluir o cadastro de %s?', $aluno['Aluno']['nome'])); ?>
                                            </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="paging">
	<?php
		/*echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));*/
	?>
	</div>
                <!-- /.row -->
