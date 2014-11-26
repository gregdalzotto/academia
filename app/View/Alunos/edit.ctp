<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Edição de Cadastro de Aluno
                        </h1>
                        <ol class="breadcrumb">
                           
                             <li>
                                <i class="fa fa-table"></i>  <a href="alunos">Alunos</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-male"></i> Edição de Cadastro: <?php echo $this->data['Aluno']['nome']; ?>
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

    <?php echo $this->Form->create('Aluno',array('class'=>'form-horizontal','role'=>'form')); ?>
    
    <div class="form-group form-group-sm">
        <div class="col-sm-2">
            <label>Vencimento:</label>
                <select class="form-control" name="data[Aluno][vencimento]">
                    <option <?php if($this->data['Aluno']['vencimento'] == '01'){ echo 'selected="selected"'; } ?> value='01'>01</option>
                    <option <?php if($this->data['Aluno']['vencimento'] == '05'){ echo 'selected="selected"'; } ?> value='05'>05</option>
                    <option <?php if($this->data['Aluno']['vencimento'] == '10'){ echo 'selected="selected"'; } ?> value='10'>10</option>
                    <option <?php if($this->data['Aluno']['vencimento'] == '15'){ echo 'selected="selected"'; } ?> value='15'>15</option>
                    <option <?php if($this->data['Aluno']['vencimento'] == '20'){ echo 'selected="selected"'; } ?> value='20'>20</option>
                    <option <?php if($this->data['Aluno']['vencimento'] == '25'){ echo 'selected="selected"'; } ?> value='25'>25</option>
                    <option <?php if($this->data['Aluno']['vencimento'] == '30'){ echo 'selected="selected"'; } ?> value='30'>30</option>
                </select>
        </div>
        <div class="col-sm-10">
                <a style='float:right;' data-toggle="modal" data-target=".targetlink-cadastrar" class='botaover'  href="javascript:void(0);">Cadastrar Mensalidade <i class="fa fa-money"></i></a>
        </div>
    </div>
       <?php /*print_r($aluno); */?>
  <div class="form-group form-group-sm">
    <div class="col-sm-6">
      <label>Nome: </label>
      
      <input class="form-control" type="text" value="<?php echo $this->data['Aluno']['nome']; ?>" name='data[Aluno][nome]' id="nome" >
    </div>
       <div class="col-sm-3">
        <label>CPF: </label>
      <input class="form-control cpf" type="text" value="<?php echo $this->data['Aluno']['cpf']; ?>" name='data[Aluno][cpf]' id="cpf" >
    </div>
    <div class="col-sm-3">
        <label>Telefone: </label>
      <input class="form-control telefone" value="<?php echo $this->data['Aluno']['telefone']; ?>" type="text" name='data[Aluno][telefone]' id="telefone" >
    </div>
  </div>

   <div class="form-group form-group-sm">
    
    <div class="col-sm-5">
      <label>Endereço: </label><input class="form-control" value="<?php echo $this->data['Aluno']['endereco']; ?>" name='data[Aluno][endereco]' type="text" id="endereco">
    </div>
    <div class="col-sm-2">
      <label>Nº: </label><input class="form-control" type="text" name='data[Aluno][numero]' value="<?php echo $this->data['Aluno']['numero']; ?>" id="numero">
    </div>
       <div class="col-sm-2">
      <label>Complemento: </label><input class="form-control" type="text" name='data[Aluno][complemento]' value="<?php echo $this->data['Aluno']['complemento']; ?>" id="complemento">
    </div>
       <div class="col-sm-3">
      <label>Bairro: </label><input class="form-control" type="text" name='data[Aluno][bairro]' value="<?php echo $this->data['Aluno']['bairro']; ?>" id="bairro">
      <input type="hidden" name='data[Aluno][id]' value="<?php echo $this->data['Aluno']['id']; ?>" >
    </div>
  </div>
                
                 <div class="form-group form-group-sm">
    
    <div class="col-sm-6">
      <label>Cidade: </label><input class="form-control" name='data[Aluno][cidade]' type="text" id="cidade" value="<?php echo $this->data['Aluno']['cidade']; ?>">
    </div>
    <div class="col-sm-3">
      <label>Estado: </label><input class="form-control estado" type="text" name='data[Aluno][estado]' value="<?php echo $this->data['Aluno']['estado']; ?>" id="estado">
    </div>
       <div class="col-sm-3">
      <label>Cep: </label><input class="form-control cep" type="text" name='data[Aluno][cep]' value="<?php echo $this->data['Aluno']['cep']; ?>" id="cep">
    </div>
  </div>

                
                <!--button type="button" class="btn btn-xs btn-primary">Primary</button-->
<?php echo $this->Form->end(array('label'=>__('Salvar alterações'),'class'=>'btn btn-xs btn-primary')); ?>

                <div class='col-lg-12'><br/><br/></div>
                
                


<div class="col-lg-12" >
                    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Mensalidades de <?php echo $this->data['Aluno']['nome']; ?></h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Vencimento</th>
                                                <th>Status</th>
                                                <th>Valor (R$)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($this->data['Mensalidade'] as $mensalidades){ ?>
                                            <tr>
                                                <td><?php echo date('d/m/Y',  strtotime($mensalidades['data'])); ?></td>
                                                <td>
                                                    <?php 
                                                        switch($mensalidades['status']){
                                                            case 0:
                                                                $tag = '<div class="badge" style="background-color:#428BCA">A Vencer</div>';
                                                                break;
                                                            case 2:
                                                                $tag = '<div class="badge" style="background-color: #5CB85C">Paga</div>';
                                                                break;
                                                            case 1:
                                                                $tag = '<div class="badge" style="background-color: #D9534F">Vencida</div>';
                                                                break;
                                                            
                                                        }
                                                        echo $tag;
                                                    ?>
                                                </td> 
                                                <td>R$<?php echo $mensalidades['valor']; ?><a style='float:right;' data-toggle="modal" data-target=".targetlink-<?php echo $mensalidades['id']; ?>" class='botaover' id='verMens-<?php echo $mensalidades['id']; ?>'  href="javascript:void(0);">Ver <i class="fa fa-arrow-circle-right"></i></a></td>
                                            </tr>
                                            <!-- Small modal -->
                                                
                                            <div class="modal fade bs-example-modal-lg targetlink-<?php echo $mensalidades['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                  <div class="modal-content">
                                                    <div id="page-wrapper">

                                                    <div class="container-fluid">
                                                        <!-- Page Heading -->
                                                        <!--
                                                        formulario de manutençaõ da mensalidade
                                                        -->
                                                        <form class='form-horizontal' id="form-<?php echo $mensalidades['id']; ?>"  >
    
                                                            <div class="form-group form-group-sm">

                                                                 <div class="col-sm-6">
                                                                    <label>Aluno: </label>
                                                                    <input class="form-control" disabled="disabled" type="text" value='<?php echo $this->data['Aluno']['nome']; ?>' id="nome" >
                                                                </div>
                                                                
                                                                <div class="col-sm-6" id="">
                                                                    <label>Vencimento: </label>
                                                                    <input data-format="dd/MM/yyyy" class="form-control datepicker" name="data[Mensalidade][data]" type="text" value='<?php echo date('d/m/Y',strtotime($mensalidades['data'])); ?>' id="nome" >
                                                                    
                                                                                                                                     
                                                                </div>
                                                                
                                                                <div class="col-sm-6">
                                                                    <label>Valor: </label>
                                                                    <input class="form-control valor" type="text" name="data[Mensalidade][valor]" value='<?php echo $mensalidades['valor']; ?>' id="nome" >
                                                                </div>
                                                                
                                                                <div class="col-sm-6">
                                                                    <label>Valor Pago: </label>
                                                                    <input class="form-control valor" name="data[Mensalidade][valor_pago]" type="text" value='<?php echo $mensalidades['valor_pago']; ?>' id="nome" >
                                                                </div>
                                                                
                                                                
                                                                <div class="col-sm-3">
                                                                    <label>Status:</label>
                                                                        <select class="form-control"  name="data[Mensalidade][status]">
                                                                            <option <?php if($mensalidades['status'] == '0'){ echo "selected='selected'"; } ?> value='0'>A Vencer</option>
                                                                            <option <?php if($mensalidades['status'] == '1'){ echo "selected='selected'"; } ?> value='1'>Vencida</option>
                                                                            <option <?php if($mensalidades['status'] == '2'){ echo "selected='selected'"; } ?> value='2'>Paga</option>
                                                                        </select>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <input type="hidden" name="data[Mensalidade][id]" value="<?php echo $mensalidades['id']; ?>">
                                                                    <button type='button' value="<?php echo $mensalidades['id']; ?>" style="margin-top:28px;" class='btn btn-xs btn-primary editar'>Editar Mensalidade</button>
                                                                </div>
                                                            
                                                            </div>




                                                            <!--button type="button" class="btn btn-xs btn-primary">Primary</button-->
                                                           
                                                        </form>
                                                        
                                                    </div>
                                                    <!-- /.container-fluid -->

                                                </div>
                                                  </div>
                                                </div>
                                              </div>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>  
                
                
                
                
                
<div class="modal fade bs-example-modal-lg targetlink-cadastrar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div id="page-wrapper">

    <div class="container-fluid">
        <!-- Page Heading -->
        <!--
        formulario de manutençaõ da mensalidade
        -->
        <form class='form-horizontal' id="form-cadastrar"  >

            <div class="form-group form-group-sm">

                 <div class="col-sm-6">
                    <label>Aluno: </label>
                    <input class="form-control"  value="<?php echo $this->data['Aluno']['nome']; ?>" disabled="disabled" type="text" id="nome" >
                    <input class="form-control" name="data[Mensalidade][aluno_id]" value="<?php echo $this->data['Aluno']['id']; ?>" type="hidden" id="nome" >
                </div>

                <div class="col-sm-6" id="">
                    <label>Vencimento: </label>
                    <input data-format="dd/MM/yyyy" class="form-control datepicker" name="data[Mensalidade][data]" type="text" id="nome" >


                </div>

                <div class="col-sm-6">
                    <label>Valor: </label>
                    <input class="form-control valor" type="text" name="data[Mensalidade][valor]" id="nome" >
                </div>

                <div class="col-sm-6">
                    <label>Valor Pago: </label>
                    <input class="form-control valor" name="data[Mensalidade][valor_pago]" type="text"  id="nome" >
                </div>


                <div class="col-sm-3">
                    <label>Status:</label>
                        <select class="form-control"  name="data[Mensalidade][status]">
                            <option value='0'>A Vencer</option>
                            <option value='1'>Vencida</option>
                            <option value='2'>Paga</option>
                        </select>
                </div>
                <div class="col-sm-3">

                    <button type='button' style="margin-top:28px;" class='btn btn-xs btn-primary cadastrar'>Inserir Mensalidade</button>
                </div>

            </div>




            <!--button type="button" class="btn btn-xs btn-primary">Primary</button-->

        </form>

    </div>
    <!-- /.container-fluid -->

</div>
  </div>
</div>
</div>
                
                
                
                
                <script>
                    
                    $(document).ready(function(){
                       $(".datepicker").mask("99/99/9999");
                       $(".valor").maskMoney({thousands:'.', decimal:','});
                       $(".cpf").mask("999.999.999-99");
                       $(".telefone").mask("(99) 9999-9999");
                       $(".cep").mask("99999-999");
                       $(".estado").mask("aa");
                    });
                
                
                $(".editar").click(function(){
                        //$.post('mensalidade-editar-'+$(this).val(),{$('#form-'+$(this).val()).serialize()});
                            $.ajax({
                                type: "put",
                                    url: "mensalidades/edit/"+$(this).val(),
                                    data: $('#form-'+$(this).val()).serialize(),

                                    success: function(data){

                                        if(data){

                                            location.reload();
                                        }
                                    }
                            })
                        });
                        
                        $(".cadastrar").click(function(){
                        //$.post('mensalidade-editar-'+$(this).val(),{$('#form-'+$(this).val()).serialize()});
                            $.ajax({
                                type: "post",
                                    url: "mensalidades/add",
                                    data: $('#form-cadastrar').serialize(),

                                    success: function(data){

                                        if(data){

                                           location.reload();
                                        }
                                    }
                            })
                        });
                    
                    
                </script>
                
                
                 