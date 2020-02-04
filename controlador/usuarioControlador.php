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

	public static function getUsuarios() {
		return usuarioDao::getUsuarios();
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

	public static function crearUsuario($nombre, $email, $usuario, $password, $privilegio, $id) {
		$obj_usuario = new Usuario();
		$obj_usuario->setNombre($nombre);
		$obj_usuario->setEmail($email);
		$obj_usuario->setUsuario($usuario);
		$obj_usuario->setPassword($password);
		$obj_usuario->setPrivilegio($privilegio);
		if (!is_null($id)) {
			$obj_usuario->setId($id);
		}

		return usuarioDao::crearUsuario($obj_usuario);

	}

	public static function getUsuarioPorId($id) {
		return usuarioDao::getUsuarioPorId($id);
	}

	public static function eliminarUsuario($id) {
		return usuarioDao::eliminarUsuario($id);
	}

}