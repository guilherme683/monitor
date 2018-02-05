<?php
$conn = mysqli_connect("localhost", "root", "familia131303", "angularjs");
$info = json_decode(file_get_contents("php://input"));
if (count($info) > 0) {
    $acao     = mysqli_real_escape_string($conn, $info->acao);
    $comando    = mysqli_real_escape_string($conn, $info->comando);
    $selecionar    = mysqli_real_escape_string($conn, $info->selecionar);
    $btn_name = $info->btnName;
    if ($btn_name == "Cadastrar") {
        $query = "INSERT INTO tab_angularjs(acao, comando, sgdb) VALUES ('$acao', '$comando', '$selecionar')";
        if (mysqli_query($conn, $query)) {
            echo "Registro inserido com sucesso!";
        } else {
            echo 'Falha na inserção do registro!';
        }
    }
    if ($btn_name == 'Atualizar') {
        $id    = $info->id;
        $query = "UPDATE tab_angularjs SET acao = '$acao', comando = '$comando', sgdb = '$selecionar' WHERE id = '$id'";
        if (mysqli_query($conn, $query)) {
            echo 'Registro atualizado com sucesso!';
            
        } else {
            echo 'Falha na atualização do registro!';
        }
       
          
       
    }
}
?>
