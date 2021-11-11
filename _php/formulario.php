<?php
	function enviarMensagem ($dados) {
		//Dados do formulario
		$nome_usuario = $dados['nome'];
		$email_usuario = $dados['email'];
		$telefone_usuario = $dados['telefone'];
		$mensagem_usuario = $dados['mensagem'];

		//Criar variaveis de envio
		$destino = "lucasamd@gmail.com";
		$remetente = "From: drattodourado@gmail.com"; //Tem que ser um email de domínio
		$assunto = "Mensagem do site";

		//Montar o corpo da mensagem
		$mensagem = "Mensagem do usuário " . $nome_usuario . "</BR>";
		$mensagem .= "Email: " . $email_usuario . "</BR>";
		$mensagem .= "Telefone: " . $telefone_usuario . "</BR>";
		$mensagem .= "Mensagem: " . "</BR>";
		$mensagem .= $mensagem_usuario;

		return mail($destino, $assunto, $mensagem, $remetente);
		ini_set('display_errors', '1');
	}
?>