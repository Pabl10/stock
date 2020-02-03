<?php

include 'conexion.php';
include '../entidades/usuario.php';

class usuarioDao extends Conexion {

	protected static $cnx;

	private static function getConexion() {
		self::$cnx = Conexion::conectar();
	}

	private static function desconectar() {
		self::$cnx = null;
	}

	/**
	 * Metodo que sirve para validar el login
	 */
	public static function login($usuario) {
		$query = "SELECT * FROM
				usuarios WHERE usuario = :usuario AND password = :password";

		self::getConexion();

		$resultado = self::$cnx->prepare($query);
		$resultado->bindParam(':usuario', $usuario->getUsuario());
		$resultado->bindParam(':password', $usuario->getPassword());

		$resultado->execute();

		if ($resultado->rowCount() > 0) {
			$filas = $resultado->fetch();
			//print_r($filas);
			if ($filas['usuario'] == $usuario->getUsuario() && 
				$filas['password'] == $usuario->getPassword()) 
			{
				return true;
			}
		}

		return false;
	}

	/**
	 * Metodo que sirve para obtener un usuario
	 */
	public static function getUsuario($usuario) {
		$query = "SELECT id, nombre, usuario, email, privilegio, fecha_registro FROM
				usuarios WHERE usuario = :usuario AND password = :password";

		self::getConexion();

		$resultado = self::$cnx->prepare($query);
		$resultado->bindParam(':usuario', $usuario->getUsuario());
		$resultado->bindParam(':password', $usuario->getPassword());

		$resultado->execute();

		$filas = $resultado->fetch();

		$usuario = new Usuario();

		$usuario->setId($filas['id']);
		$usuario->setNombre($filas['nombre']);
		$usuario->setUsuario($filas['usuario']);
		$usuario->setEmail($filas['email']);
		$usuario->setPrivilegio($filas['privilegio']);
		$usuario->setFecha_registro($filas['fecha_registro']);


		return $usuario;

	}


}