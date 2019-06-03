<?php
	include("classeCabecalho.php");
	$c->exibe_menu();
	
	include("autenticacao.php");
	
	$from=$_SESSION["usuario"]->get_email();
	$fromName=$_SESSION["usuario"]->get_nome();
	
	$subject = $_POST["assunto"];
	$mensagem = $_POST["mensagem"];

	$email_destinatario = "piio.marcos@gmail.com";
	$nome_destinatario = "Administrador";
	
	include("email.php");

?>	
	