<?php
$conn   = mysqli_connect("localhost", "root", "familia131303", "angularjs");
$output = array();
$query  = "SELECT cod_usuario_sistema, txt_usuario_sistema, txt_senha_usuario_sistema, txt_servidor, txt_sgdb, txt_banco_de_dados, txt_esquema, txt_observacao_banco_de_dados, txt_solicitante, sgl_setor, num_ramal, txt_email, dte_solicitacao FROM tab_usuarios_sistema";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_array($result)) {
		$data[] = $row;

	}

	echo json_encode($data);

}
?> 