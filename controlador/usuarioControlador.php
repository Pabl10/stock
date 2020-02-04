<?php

include '../datos/usuarioDao.php';

class usuarioControlador {

	public static function login($usuario, $password) {
		$obj_usuario = new Usuario();
		$obj_usuario->setUsuario($usuario);
		$obj_usuario->setPassword($password);

		return usuarioDao::login($obj_usuario);
	}

	public static function getUsuario($usuario, $password) {
		$obj_usuario = new Usuario();
		$obj_usuario->setUsuario($usuario);
		$obj_usuario->setPassword($password);

		return usuarioDao::getUsuario($obj_usuario);

	}

	public static function registrar($nombre, $email, $usuario, $password, $privilegio) {
		$obj_usuario = new Usuario();
		$obj_usuario->setNombre($nombre);
		$obj_usuario->setEmail($email);
		$obj_usuario->setUsuario($usuario);
		$obj_usuario->setPassword($password);
		$obj_usuario->setPrivilegio($privilegio);

		return usuarioDao::registrar($obj_usuario);

	}

}