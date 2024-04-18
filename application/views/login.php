<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Iniciar sesion: Reportes Autos</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
     <!--MAIN CONTENT-->

	  <div id="login-page">
	  	<div class="container">
		      <form class="form-login" action="" method="post">
		        <h2 class="form-login-heading">Iniciar sesion</h2>
		        <div class="login-wrap">
		            <input name="username" type="email" class="form-control" placeholder="Correo" autofocus>
		            <br>
		            <input name="password" type="password" class="form-control" placeholder="Contraseña">
		            <label class="checkbox">
		                <span class="pull-right">
											<!--<a data-toggle="modal" href="login.html#myModal"> ¿Olvidaste la contraseña?</a>-->
		                </span>
		            </label>
		            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> ENTRAR</button>
		            <hr>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								¿No tienes una cuenta? <a href="<?= base_url()?>Dashboard/registrar" class="text-dark">Crear una</a>
							</div>
						</div>		            
		        </div>
		      </form>	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url()?>assets/js/jquery.js"></script>
    <script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?= base_url()?>assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>
<!--     <script>
        $.backstretch("<?= base_url()?>assets/img/login-bg.jpg", {speed: 500});
    </script> -->


  </body>
</html>
