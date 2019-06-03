<?php



	include("classeCabecalho.php");
	$c->exibe_menu();

	include("classeBancoDeDados.php");

	@$chave = md5($_POST["email"].date("Ymdhis"));
	
	$op = new BancoDeDados($conexao);
	
	$tabela[]="usuario";

	$coluna[]="id_usuario as id";

	$coluna[]="nome";

	$condicao[] = "email='".$_POST["email"]."'";

	$ordenacao="";

	$m = $op->select($tabela,$coluna,$condicao,$ordenacao);

	if($m==null)
	{
		echo "<h3>Email Invalido.</h3>";
			echo "<a href = 'form_login.php'>Voltar para login</a> ou <br/>
				<a href = 'form_resetar_senha.php'>Voltar para reset de senha</a>";
	}
	else
	{
	
		$id=$m[0]["id"];

		

		$valores = array("codigo_alteracao"=>$chave);

		$op->alterar($valores,"usuario",$id);
		
		$from="piio.marcos@gmail.com";

		$fromName= "Central Pet";

		
		$subject = "Você solicitou o reset de senha";

		$mensagem = "Você solicitou um reset de senha.<br /><br />

						<a href='http://localhost:8081/projeto/resetar_senha.php?email=".$_POST["email"]."&codigo_alteracao=$chave'>Clique aqui</a> para resetar sua senha.";


		$destinatario = $m[0]["nome"];

		$email = $_POST["email"];
						
		include("email.php");
		
		echo "$destinatario seu reset de senha foi enviado. Confira seu email.";

	}
	?>

	<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/alterar_cidade.js"></script>
</body>
</html>