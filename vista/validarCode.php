<?php  

include '../controlador/usuarioControlador.php';
include '../helps/helps.php';

session_start();

header('Content-Type: application/json');

$resultado = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['txtUsuario']) && isset($_POST['txtPassword'])) {

		$txtUsuario = validar_campo($_POST['txtUsuario']);
		$txtPassword = validar_campo($_POST['txtPassword']);

		$resultado = array("estado"=> "true");

		if( usuarioControlador::login($txtUsuario, $txtPassword)) {
			$usuario = usuarioControlador::getUsuario($txtUsuario, $txtPassword);
			$_SESSION['usuario'] = array(
				"id" 			=> $usuario->getId(),
				"nombre" 		=> $usuario->getNombre(),
				"usuario"	 	=> $usuario->getUsuario(),
				"email" 		=> $usuario->getEmail(),
				"privilegio" 	=> $usuario->getPrivilegio()
			);

			return print(json_encode($resultado));
		}
	}
}

$resultado = array("estado"=> "false");

return print(json_encode($resultado));

?>