<?php 

class Conexion {
	/**
	 * Conexion a la base de datos
	 Retorna una conexion PDO
	 */
	public static function conectar() {
		try {
			
			$cn = new PDO('mysql:host=localhost;dbname=login-stock','root', '');
			return $cn;

		} catch (PDOException $ex) {
			die($ex->getMessage());
		}
	}
}