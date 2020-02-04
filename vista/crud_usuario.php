<?php include 'partials/head.php'; ?>
<?php include 'partials/menu.php'; ?>

<?php 

include '../controlador/usuarioControlador.php';
include '../helps/helps.php';

$filas = usuarioControlador::getUsuarios();

?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<br>
			<a href="crear_usuario_form.php" class="btn btn-primary">Crear usuario +</a>
			<br>
			<br>
		</div>
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Usuario</th>
								<th>Email</th>
								<th>Privilegio</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($filas as $usuario) {
								
							?>
							<tr>
								<td><?php echo $usuario['id'] ?></td>
								<td><?php echo $usuario['nombre'] ?></td>
								<td><?php echo $usuario['usuario'] ?></td>
								<td><?php echo $usuario['email'] ?></td>
								<td><?php echo getPrivilegio($usuario['privilegio']) ?></td>
								<td>
									<a href="crear_usuario_form.php?id=<?php echo $usuario['id'] ?>" class="btn btn-success btn-sm">Editar</a>
									<a href="eliminar_usuario_logic.php?id=<?php echo $usuario['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
								</td>
							</tr>
							
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'partials/footer.php'; ?>