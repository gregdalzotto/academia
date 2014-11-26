<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Gregori Dalzotto">

    <title>Sistema Administrativo - Intense Gym</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- JQUERY/BOOTSTRAP  -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/maskedinput.js"></script>
    <script src="js/maskmoney.js"></script>
    <!--script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Navegação</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Intense Gym</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Sair</a>
                        </li>
                    </ul>
                </li>
            </ul>
           
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li <?php if($this->request->params['controller'] == 'alunos' && $this->request->params['action'] == 'index'){ echo 'class="active"'; } ?>>
                        <a href="alunos"><i class="fa fa-fw fa-user "></i> Alunos</a>
                    </li>
                    <li <?php if($this->request->params['controller'] == 'alunos' && $this->request->params['action'] == 'add'){ echo 'class="active"'; } ?>>
                        <a href="aluno-adicionar"><i class="fa fa-fw fa-plus "></i> Adicionar Aluno</a>
                    </li>
                    <li <?php if($this->request->params['controller'] == 'modalidades' && $this->request->params['action'] == 'index'){ echo 'class="active"'; } ?>>
                        <a href="modalidades"><i class="fa fa-fw fa-align-justify "></i> Modalidades</a>
                    </li>
                    <li <?php if($this->request->params['controller'] == 'modalidades' && $this->request->params['action'] == 'add'){ echo 'class="active"'; } ?>>
                        <a href="modalidade-adicionar"><i class="fa fa-fw fa-plus "></i> Adicionar Modalidade</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
               <?php echo $this->Session->flash(); ?>

			  <?php echo $this->fetch('content'); ?>
                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    

    <!-- Morris Charts JavaScript -->
    
    

</body>

</html>