<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Edição de Cadastro de Modalidade
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                             <li>
                                <i class="fa fa-table"></i>  <a href="modalidades">Modalidades</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-male"></i> Cadastro de Modalidade
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
 <?php echo $this->Form->create('Modalidade',array('class'=>'form-horizontal','role'=>'form')); ?>
    
    <div class="form-group form-group-sm">
        
         <div class="col-sm-6">
            <label>Nome: </label>
            <input class="form-control" type="text" name='data[Modalidade][nome]' id="nome" >
        </div>
        
        <div class="col-sm-4">
            <label>Status:</label>
                <select class="form-control" name="data[Modalidade][status]">
                    <option value='1'>Ativo</option>
                    <option value='0'>Inativo</option>
                </select>
        </div>
        
    </div>
       
  

                
                <!--button type="button" class="btn btn-xs btn-primary">Primary</button-->
<?php echo $this->Form->end(array('label'=>__('Salvar alterações'),'class'=>'btn btn-xs btn-primary')); ?>