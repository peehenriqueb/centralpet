<?php

	include("classeCabecalho.php");
	include("classeForm.php");
	
	$parametros["action"]="enviar_resetar_senha.php";
	$parametros["method"]="post";
	
	$f = new Form($parametros);
	
	$parametros=null;
	$parametros["type"]="email";
	$parametros["name"]="email";
	$parametros["class"]="form-control";
	$parametros["required"]="required";
	$parametros["placeholder"]="Digite o email para recuperar a senha...";
	$f->add_input($parametros);
	

	$f->exibe();

?>
</body>
</html>