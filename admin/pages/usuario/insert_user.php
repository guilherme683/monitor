<?php
$conn = mysqli_connect("localhost", "root", "familia131303", "angularjs");
$info = json_decode(file_get_contents("php://input"));
if (count($info) > 0) {
  
    $usuario    = mysqli_real_escape_string($conn, $info->usuario);
    $login    = mysqli_real_escape_string($conn, $info->login);
    $senha    = mysqli_real_escape_string($conn, $info->senha);
    $criptografada = md5($senha);
    $selecionar    = (mysqli_real_escape_string($conn, $info->selecionar));
    $status   = (mysqli_real_escape_string($conn, $info->status) ? 'Ativo' : 'Inativo') ;


    $btn_name = $info->btnName;


if ($btn_name == "Cadastrar") {
    $query = "INSERT INTO tab_usuarios(txt_nome_usuario, txt_usuario, txt_senha, txt_perfil, bln_status) VALUES ( '$login', '$usuario', '$criptografada', '$selecionar', '$status')";
    if (mysqli_query($conn, $query)) {
        echo "Registro inserido com sucesso!";
    } else {
        echo 'Falha na inserção do registro!';
    }
}

if ($btn_name == 'Atualizar') {
    $id    = $info->id;
    $query = "UPDATE tab_usuarios SET txt_nome_usuario = '$login', txt_usuario = '$usuario',  txt_senha = '$criptografada', txt_perfil = '$selecionar', bln_status = '$status' WHERE id = '$id'";
    if (mysqli_query($conn, $query)) {
        echo 'Registro atualizado com sucesso!';

    } else {
        echo 'Falha na atualização do registro!';
    }


}
}
?>
