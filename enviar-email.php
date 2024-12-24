<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletando os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensagem = $_POST['mensagem'];

    // Defina o seu e-mail de destino
    $para = "cabeiabusinesscontact@gmail.com"; // seu e-mail
    $assunto = "Nova mensagem do formulário de contato";

    // Corpo do e-mail
    $corpo = "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Celular: $celular\n";
    $corpo .= "Mensagem: $mensagem\n";

    // Cabeçalhos do e-mail
    $cabecalhos = "From: $email" . "\r\n" .
                  "Reply-To: $email" . "\r\n" .
                  "X-Mailer: PHP/" . phpversion();

    // Enviar o e-mail
    if (mail($para, $assunto, $corpo, $cabecalhos)) {
        // Redirecionar ou exibir mensagem de sucesso
        header('Location: obrigado.html'); // Página de agradecimento
        exit();
    } else {
        echo "Erro ao enviar mensagem.";
    }
}
?>