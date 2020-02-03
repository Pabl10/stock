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

}