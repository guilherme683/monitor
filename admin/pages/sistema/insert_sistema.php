<?php
$conn = mysqli_connect("localhost", "root", "familia131303", "angularjs");
$info = json_decode(file_get_contents("php://input"));
if (count($info) > 0) {
    $usuario_sistema    = mysqli_real_escape_string($conn, $info->usuario_sistema);
    $senha   = mysqli_real_escape_string($conn, $info->senha);

    function asterisco($palavra, $tamanho) {
$t = strlen($palavra); // TAMANHO DA STRING
return substr($palavra, 0, $t-$tamanho).str_repeat("*", $tamanho); // RESULTADO tes**
}


    $escondida = asterisco($senha, 7);

    $nome_servidor   = mysqli_real_escape_string($conn, $info->nome_servidor);
    $selecionar    = (mysqli_real_escape_string($conn, $info->selecionar));
    $nome_banco   = mysqli_real_escape_string($conn, $info->nome_banco);
    $esquema  = mysqli_real_escape_string($conn, $info->esquema);
    $descricao  = mysqli_real_escape_string($conn, $info->descricao);
    $solicitante   = mysqli_real_escape_string($conn, $info->solicitante);
    $setor   = mysqli_real_escape_string($conn, $info->setor);
    $ramal   = mysqli_real_escape_string($conn, $info->ramal);
    $email   = mysqli_real_escape_string($conn, $info->email);
    $data   = mysqli_real_escape_string($conn, $info->data);
    
    $btn_name = $info->btnName;


    if ($btn_name == "Cadastrar") {
        $query = "INSERT INTO tab_usuarios_sistema(txt_usuario_sistema, txt_senha_usuario_sistema, txt_servidor, txt_sgdb, txt_banco_de_dados, txt_esquema, txt_observacao_banco_de_dados, txt_solicitante, sgl_setor, num_ramal, txt_email, dte_solicitacao) VALUES ('$usuario_sistema', '$escondida', '$nome_servidor', '$selecionar', '$nome_banco', '$esquema', '$descricao', '$solicitante', '$setor', '$ramal', '$email', '$data')";
        if (mysqli_query($conn, $query)) {
            echo "Registro inserido com sucesso!";
        } else {
            echo 'Falha na inserção do registro!';
        }
    }

    if ($btn_name == 'Atualizar') {
        $cod_usuario_sistema    = $info->cod_usuario_sistema;
        $query = "UPDATE tab_usuarios_sistema SET txt_usuario_sistema = '$usuario_sistema', txt_senha_usuario_sistema = '$escondida', txt_servidor = '$nome_servidor', txt_sgdb = '$selecionar', txt_banco_de_dados = '$nome_banco', txt_esquema = '$esquema', txt_observacao_banco_de_dados = '$descricao', sgl_setor = '$setor', num_ramal = '$ramal', txt_email = '$email', dte_solicitacao = '$data' , txt_solicitante = '$solicitante'  WHERE cod_usuario_sistema = '$cod_usuario_sistema'";
        if (mysqli_query($conn, $query)) {
            echo 'Registro atualizado com sucesso!';

        } else {
            echo 'Falha na atualização do registro!';
        }



    }
}
?>
