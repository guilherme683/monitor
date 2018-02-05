<?php
$conn   = mysqli_connect("localhost", "root", "familia131303", "angularjs");
$output = array();
$query  = "SELECT id, txt_nome_usuario, txt_usuario, txt_senha, txt_perfil, bln_status, dte_cadastro FROM tab_usuarios";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;

    }

    echo json_encode($data);

}
?> 