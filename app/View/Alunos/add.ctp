<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Cadastro de Aluno
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                             <li>
                                <i class="fa fa-table"></i>  <a href="alunos">Alunos</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-male"></i> Cadastro de Aluno
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
                    <option value='01'>01</option>
                    <option value='05'>05</option>
                    <option value='10'>10</option>
                    <option value='15'>15</option>
                    <option value='20'>20</option>
                    <option value='25'>25</option>
                    <option value='30'>30</option>
                </select>
        </div>
        <div class="col-sm-10">
                
        </div>
    </div>
       
  <div class="form-group form-group-sm">
    <div class="col-sm-6">
      <label>Nome: </label>
      
      <input class="form-control" type="text" name='data[Aluno][nome]' id="nome" >
    </div>
       <div class="col-sm-3">
        <label>CPF: </label>
      <input class="form-control cpf" type="text" name='data[Aluno][cpf]' id="cpf" >
    </div>
    <div class="col-sm-3">
        <label>Telefone: </label>
      <input class="form-control telefone" type="text" name='data[Aluno][telefone]' id="telefone" >
    </div>
  </div>

   <div class="form-group form-group-sm">
    
    <div class="col-sm-6">
      <label>Endereço: </label><input class="form-control" name='data[Aluno][endereco]' type="text" id="endereco">
    </div>
    <div class="col-sm-3">
      <label>Nº: </label><input class="form-control" type="text" name='data[Aluno][numero]' id="numero">
    </div>
       <div class="col-sm-3">
      <label>Complemento: </label><input class="form-control" type="text" name='data[Aluno][complemento]' id="complemento">
    </div>
  </div>
                
                 <div class="form-group form-group-sm">
    
    <div class="col-sm-6">
      <label>Cidade: </label><input class="form-control" name='data[Aluno][cidade]' value="Vacaria" type="text" id="cidade">
    </div>
    <div class="col-sm-3">
      <label>Estado: </label><input class="form-control estado" value="RS" type="text" name='data[Aluno][estado]' id="estado">
    </div>
       <div class="col-sm-3">
      <label>Cep: </label><input value="95200-000" class="form-control cep" type="text" name='data[Aluno][cep]' id="cep">
    </div>
  </div>

                
                <!--button type="button" class="btn btn-xs btn-primary">Primary</button-->
<?php echo $this->Form->end(array('label'=>__('Cadastrar'),'class'=>'btn btn-xs btn-primary')); ?>

                
                 <script>
                    
                    $(document).ready(function(){
                       
                       
                       $(".cpf").mask("999.999.999-99");
                       $(".telefone").mask("(99) 9999-9999");
                       $(".cep").mask("99999-999");
                       $(".estado").mask("aa");
                    });
                </script>