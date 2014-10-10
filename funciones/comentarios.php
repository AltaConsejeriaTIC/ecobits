<?php
require_once '../comun/class.dbDriver.php';
session_start();


$request = json_decode(filter_input(INPUT_POST,'request'));
$response = new stdClass;
$db = new DBDriver(PDOConfig::getInstance());


$inserta=<<<QUERY
INSERT INTO comentarios (id_usuario,mensaje,fecha) VALUES (?,?,?)
QUERY;

$actualiza=<<<QUERY
UPDATE SET usuarios nombres=?,email=? WHERE id_usuario = ? 
QUERY;

$consulta=<<<QUERY
SELECT *,comentarios.fecha as fecha_c FROM comentarios
JOIN usuarios
ON comentarios.id_usuario = usuarios.id_usuario
ORDER BY comentarios.fecha DESC
QUERY;

switch ($request->accion) {
	case 'enviar':
		 $_SESSION['usuario'] = strtoupper($request->nombres);
		 $db->set($inserta,array($_SESSION['id'],$request->mensaje,date('Y-m-d H:i:s')));
 		 $db->set($actualiza,array($request->nombres,$request->email,$_SESSION['id']));
 		 $response = '';
	break;
	case 'consulta':
		$response = $db->set($consulta,array());
		$response = comentarios($response);
	break;

}

echo json_encode($response,JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);

function comentarios($comentarios){
	$cad ='';
	foreach ($comentarios as $comentario) {
		$cad.= '<table class="table table-bordered">';
		$cad.= '<tr>';
		$cad.= '<td class="success"><b>'.$comentario['nombres'].'<b></td>';
		$cad.= '<td>'.$comentario['fecha_c'].'</td>';
		$cad.= '</tr>';
		$cad.= '<tr>';
		$cad.= '<td colspan="2" class="warning">'.$comentario['mensaje'].'</td>';
		$cad.= '</tr>';
		$cad.= '</table>';
	}
	return $cad;
}

?>