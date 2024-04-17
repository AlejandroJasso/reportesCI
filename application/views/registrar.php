<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Login">
	<title>Registrar</title>
	<link rel="stylesheet" href="<?php echo site_url();?>assets/all.css">
	<link rel="stylesheet" href="<?php echo site_url();?>assets/toast/toast.min.css">
	<script src="<?php echo site_url();?>assets/toast/jqm.js"></script>
	<script src="<?php echo site_url();?>assets/toast/toast.js"></script>
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
								<h1 class="fs-4 card-title fw-bold mb-4">Registrar</h1>
								<?php echo form_open('Dashboard/registrar_formAgente'); ?>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Nombre:</label>
									<input name="nombre" type="text" class="form-control" value="" required autofocus>
								</div>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="username">Correo electrónico:</label>
									<input name="username" type="email" class="form-control" value="" required autofocus>
								</div>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="password">Contraseña:</label>
									<input name="password" type="password" class="form-control" required>
								</div>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="password">Confirmar contraseña:</label>
									<input name="con_password" type="password" class="form-control" required>
								</div>
								<div class="d-flex align-items-center">
									<button type="submit" class="btn btn-primary ">
										Registrar
									</button>
								</div>
								<?php echo form_close(); ?>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								¿Ya tienes una cuenta? <a href="<?php echo site_url();?>Dashboard/login" class="text-dark">Iniciar sesión</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">


		<?php if($this->session->flashdata('suc')){ ?>
			toastr.success("<?php echo $this->session->flashdata('suc'); ?>");
		<?php }else if($this->session->flashdata('worng')){  ?>
			toastr.error("<?php echo $this->session->flashdata('worng'); ?>");
		<?php }else if($this->session->flashdata('warning')){  ?>
			toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
		<?php }else if($this->session->flashdata('info')){  ?>
			toastr.info("<?php echo $this->session->flashdata('info'); ?>");
		<?php } ?>
		<?php
		$this->session->unset_userdata ( 'suc' ); ?>

		<?php
		$this->session->unset_userdata ( 'worng' ); ?>

	</script>
</body>
</html>