<?php
	// Chame o arquivo com as Classes do PHPMailer
	require_once('src/phpmailer.php');
	
	// Instвncia a classe PHPMailer
	$mail = new PHPMailer();
	
	// Configuraзгo dos dados do servidor e tipo de conexгo (Estes dados vocк obtem com seu host)
	$mail->IsSMTP(); // Define que a mensagem serб SMTP
	$mail->Host = "smtp.seudominio.com.br"; // Endereзo do servidor SMTP
	$mail->SMTPAuth = true; // Autenticaзгo (True: Se o email serб autenticado | False: se o Email nгo serб autenticado)
	$mail->Username = 'email@seudominio.com.br'; // Usuбrio do servidor SMTP
	$mail->Password = 'sua senha'; // A Senha do email indicado acima
	
	// Remetente (Identificaзгo que serб mostrada para quem receber o email)
	$mail->From = "e-mail@seudominio.com.br";
	$mail->FromName = "Nome do Remetente ";
	
	// Destinatбrio
	$mail->AddAddress('destinatario@dominio.com.br', 'Nome do Destinatбrio');

	// Opcional (Se quiser enviar cуpia do email)
	$mail->AddCC('copia@dominio.com.br', 'Copia'); 
	$mail->AddBCC('CopiaOculta@dominio.com.br', 'Copia Oculta');

	// Define tipo de Mensagem que vai ser enviado
	$mail->IsHTML(true); // Define que o e-mail serб enviado como HTML

	// Assunto e Mensagem do email
	$mail->Subject  = "Mensagem Teste"; // Assunto da mensagem
	$mail->Body = 'Aqui vem a mensagem a ser enviada, em HTML ou nгo.';
	
	// Envia a Mensagem
	$enviado = $mail->Send();
	
	// Verifica se o email foi enviado
	if($enviado)
	{
		echo "E-mail enviado com sucesso!";
	}
	else
	{
		echo "Nгo foi possнvel enviar o e-mail, devido ao erro de: ".$mail->ErrorInfo;
	}
?>