<?php
$conn = mysqli_connect("localhost", "root", "familia131303", "angularjs");
$data    = json_decode(file_get_contents("php://input"));
if (count($data) > 0) {
    $id    = $data->id;
    $query = "DELETE FROM tab_usuarios WHERE id='$id'";
    if (mysqli_query($conn, $query)) {
        echo 'Registro excluído com sucesso!';
    } else {
        echo 'Falha ao excluir o registro!';
    }
}
?>