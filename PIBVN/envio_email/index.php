<?php
	// Chame o arquivo com as Classes do PHPMailer
	require_once('src/phpmailer.php');
	
	// Inst�ncia a classe PHPMailer
	$mail = new PHPMailer();
	
	// Configura��o dos dados do servidor e tipo de conex�o (Estes dados voc� obtem com seu host)
	$mail->IsSMTP(); // Define que a mensagem ser� SMTP
	$mail->Host = "smtp.seudominio.com.br"; // Endere�o do servidor SMTP
	$mail->SMTPAuth = true; // Autentica��o (True: Se o email ser� autenticado | False: se o Email n�o ser� autenticado)
	$mail->Username = 'email@seudominio.com.br'; // Usu�rio do servidor SMTP
	$mail->Password = 'sua senha'; // A Senha do email indicado acima
	
	// Remetente (Identifica��o que ser� mostrada para quem receber o email)
	$mail->From = "e-mail@seudominio.com.br";
	$mail->FromName = "Nome do Remetente ";
	
	// Destinat�rio
	$mail->AddAddress('destinatario@dominio.com.br', 'Nome do Destinat�rio');

	// Opcional (Se quiser enviar c�pia do email)
	$mail->AddCC('copia@dominio.com.br', 'Copia'); 
	$mail->AddBCC('CopiaOculta@dominio.com.br', 'Copia Oculta');

	// Define tipo de Mensagem que vai ser enviado
	$mail->IsHTML(true); // Define que o e-mail ser� enviado como HTML

	// Assunto e Mensagem do email
	$mail->Subject  = "Mensagem Teste"; // Assunto da mensagem
	$mail->Body = 'Aqui vem a mensagem a ser enviada, em HTML ou n�o.';
	
	// Envia a Mensagem
	$enviado = $mail->Send();
	
	// Verifica se o email foi enviado
	if($enviado)
	{
		echo "E-mail enviado com sucesso!";
	}
	else
	{
		echo "N�o foi poss�vel enviar o e-mail, devido ao erro de: ".$mail->ErrorInfo;
	}
?>