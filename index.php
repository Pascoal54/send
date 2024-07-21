<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['mensagem']);
    
    $para = 'pascoalzage54@gmail.com';
    $assunto = 'Jobs Online Pascoal Zage';
    
    $corpo = "Nome: " . $nome . "\n" . "E-mail: " . $email . "\n" . "Mensagem: " . $mensagem;
    $cabeca = "From: pascoalzage54@gmail.com\r\n" . "Reply-To: " . $email . "\r\n" . "X-Mailer: PHP/" . phpversion();
    
    if (mail($para, $assunto, $corpo, $cabeca)) {
        echo 'Enviado com sucesso!';
    } else {
        echo 'Não foi enviado, infelizmente!';
    }
} else {
    echo 'Método HTTP não permitido!';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="10;url=index.html">
    <title>Envio de E-mail</title>
</head>
<body>
</body>
</html>
