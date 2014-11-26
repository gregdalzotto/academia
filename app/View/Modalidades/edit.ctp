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
                                <i class="fa fa-male"></i> Edição de Modalidade: <?php echo $this->data['Modalidade']['nome']; ?>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
 <?php echo $this->Form->create('Modalidade',array('class'=>'form-horizontal','role'=>'form')); ?>
    
    <div class="form-group form-group-sm">
        
         <div class="col-sm-6">
            <label>Nome: </label>
            <input class="form-control" type="text" value="<?php echo $this->data['Modalidade']['nome']; ?>" name='data[Modalidade][nome]' id="nome" >
            <input class="form-control" type="hidden" value="<?php echo $this->data['Modalidade']['id']; ?>" name='data[Modalidade][id]' id="id" >
        </div>
        
        <div class="col-sm-4">
            <label>Status:</label>
                <select class="form-control" name="data[Modalidade][status]">
                    <option <?php if($this->data['Modalidade']['status'] == '0'){ echo 'selected="selected"'; } ?> value='0'>Inativo</option>
                    <option <?php if($this->data['Modalidade']['status'] == '1'){ echo 'selected="selected"'; } ?> value='1'>Ativo</option>
                </select>
        </div>
        
    </div>
       
  

                
                <!--button type="button" class="btn btn-xs btn-primary">Primary</button-->
<?php echo $this->Form->end(array('label'=>__('Salvar alterações'),'class'=>'btn btn-xs btn-primary')); ?>