<?php 

/**
 * Funcion que sirve para validar y limpiar un campo
 */
function validar_campo($campo) {
	$campo = trim($campo);
	$campo = stripslashes($campo);
	$campo = htmlspecialchars($campo);

	return $campo;
}

function getPrivilegio($p) {
	$privilegio = '';
	switch ($p) {
		case 1:
			$privilegio = 'Administrador';
			break;
		case 2:
			$privilegio = 'Usuario';
			break;
		
		default:
			$privilegio = '- No definido -';
			break;
	}

	return $privilegio;
}
