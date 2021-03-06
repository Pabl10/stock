<?php include 'partials/head.php'; ?>

<?php
	if (isset($_SESSION['usuario'])) {
		if ($_SESSION['usuario']['privilegio'] == 2) {
			header('location:usuario.php');
		}
	}else {
		header('location:login.php');
	}	
?>

<?php include 'partials/menu.php'; ?>


<div class="container">
	<div class="jumbotron">
		<div class="container text-center">
			<h1><strong>Bienvenido</strong> <?php echo $_SESSION['usuario']['nombre'] ?></h1>
			<p>Panel de administrador | <span class="label label-info"> <?php echo $_SESSION['usuario']['privilegio'] == 1 ? 'admin': 'Cliente' ?></span></p>
			<p>
				<a href="cerrar-sesion.php" class="btn btn-primary btn-lg">Cerrar sesion</a>
			</p>
		</div>
	</div>
</div>

<?php include 'partials/footer.php'; ?>