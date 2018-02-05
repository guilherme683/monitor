<?php
$conn = mysqli_connect("localhost", "root", "familia131303", "angularjs");
$data    = json_decode(file_get_contents("php://input"));
if (count($data) > 0) {
	$cod_usuario_sistema   = $data->cod_usuario_sistema;
	$query = "DELETE FROM tab_usuarios_sistema WHERE cod_usuario_sistema='$cod_usuario_sistema'";
	if (mysqli_query($conn, $query)) {
		echo 'Registro excluído com sucesso!';
	} else {
		echo 'Falha ao excluir o registro!';
	}
}
?>