<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Clinica Modula Dor - Feedback</title>
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#A0CE4E">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Ligar Navegação</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF">Modula Dor | Feedback</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
					<li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php"><i class="fa fa-home fa-fw"></i>Inicio</a>
                    </li>
					<li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="https://clinicamodulador.com/" target="_blank"><i class="fa fa-globe fa-fw"></i>Blog</a>
                    </li>
					<li><a style="color:#FFFFFF" href="index.php?info=registro"><i class="fa fa-sign-out fa-fw"></i>Registro</a></li>						
	<li class="dropdown">
        <a style="color:#FFFFFF" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="index.php?info=login">Paciente</a></li>
          <li><a href="admin">Médico</a></li> 
        </ul>
      </li>
        </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<?php 
					@$info=$_GET['info'];
					if($info!="")
					{								
						 if($info=="about")
						 {
						 include('about.php');
						 }
						 else if($info=="contact")
						 {
						 include('contact.php');
						 }
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 else if($info=="registro")
						 {
						 	include('registro.php');
						 }
					}
					else
					{
				?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">	
			<div class="col-sm-10" style="margin-top:60px;margin-bottom:80px">
				<h2>Como funciona o sistem Modula Dor</h2>
				Feedback de dor
			</div>
				<?php } ?>
            </div>            
    </div>
    <!-- /.container -->
	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:10px;height:40px; background:#A0CE4E">
		<span style="color:#FFFFFF">Desenvolvido por <a href="http://spacewebso.com" target="_blank">SpaceWebSO</a> </span>
	</div>
    <!-- jQuery -->
    <script src="css/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>
</body>
</html>
