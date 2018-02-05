<?php
 
// inclui o arquivo de inicialização
require 'init.php';
 
// resgata variáveis do formulário
$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
 
if (empty($usuario) || empty($senha))
{
    echo "Informe email e senha";
    exit;
}
 
// cria o hash da senha
$passwordHash = md5($senha);
 
$PDO = db_connect();
 
$sql = "SELECT id, txt_nome_usuario FROM tab_usuarios WHERE txt_nome_usuario = '$usuario' AND txt_senha = '$senha'";
$stmt = $PDO->prepare($sql);
 
$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':senha', $passwordHash);

// var_dump($passwordHash); exit();
 
$stmt->execute();
 
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
if (count($users) <= 0)
{
    echo "Email ou senha incorretos";
    exit;
}
 
// pega o primeiro usuário
$user = $users[0];
 
session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['name'];
 
header('Location: index.php');