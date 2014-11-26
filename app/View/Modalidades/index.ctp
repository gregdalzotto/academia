
<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Modalidades
                        </h1>
                        <ol class="breadcrumb">
                            
                            <li class="active">
                                <i class="fa fa-table"></i> modalidades
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
                                        <th>Status</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php foreach ($modalidades as $modalidade): ?>
                                    <tr>
                                            <td><?php echo h($modalidade['Modalidade']['nome']); ?>&nbsp;</td>
                                            <td><?php  if($modalidade['Modalidade']['status']){ echo 'Ativo'; }else{ echo 'Inativo'; } //echo h($modalidade['Modalidade']['status']); ?>&nbsp;</td>
                                            <td class="actions">
                                                    <?php echo $this->Html->tag('a', 'Editar', array('href' => 'modalidade-editar-'.$modalidade['Modalidade']['id'])); ?>
                                                    <?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $modalidade['Modalidade']['id']), array(), __('Tem certeza que quer excluir a modalidade %s?', $modalidade['Modalidade']['nome'])); ?>
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
