<?php 


include_once "funcoes.php";

$contadorInputVazio = 0;
foreach($_POST as $item){
    $item == ""?$contadorInputVazio++:0;
}

$itensPost = is_array($_POST)?count($_POST):0;
if($contadorInputVazio == $itensPost){

echo "<h1>VOcê não enviou nenhuma informação sobre o usuario</h1>";
echo '<a class="btn btn-primary" href="cadastroUsuario.php">Voltar para de cadastro!</a>';
exit;
}

<<<<<<< HEAD
$nomeUsuario = $_POST['nomeUsuarios'];
=======
$nomeUsuario = $_POST['usuario'];
>>>>>>> 2fb4937243e63bb7e3ebba24e91ee60e1978d59f
$emailUsuario = $_POST['emailUsuario'];
$senhaUsuario = password_hash($_POST['senhaUsuario'],PASSWORD_DEFAULT);
$nivelUsuario = $_POST['nivelUsuario'];

if(addUsuario($nomeUsuario,$emailUsuario,$senhaUsuario,$nivelUsuario)){
    echo '<h1>Usuario cadastro com sucesso!</h1>';
    echo '<a class="btn btn-primary" href="login.php">Ir para pagina de login!</a>';
}else{
    echo '<h1>Erro na hora de salvar! Tenta de novo!</h1>';
    echo '<a class="btn btn-primary" href="cadastroUsuario.php">Voltar para de cadastro!</a>';
}
