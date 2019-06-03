<?php

	$parametros["links"][] 	= "css/login.css";

	include("classeCabecalho.php");
	
	/*$c->exibe_menu();*/
	
    include("classeForm.php");
	include("classeReseta.php");
	include("classeBancoDeDados.php");
   	

	$op = new BancodeDados($conexao);

	if(!empty($_POST))
	{
		$email = $_POST["email"];
		$codigo_alteracao = $_POST["codigo_alteracao"];
	}
	else
	{
		$email = $_GET["email"];
		$codigo_alteracao = $_GET["codigo_alteracao"];
	}


	$tabela[]="usuario";

	$coluna[]="id_usuario as id";

	$condicao[] = "email= '$email'";
	
	$condicao[] = "codigo_alteracao = '$codigo_alteracao'";

	$ordenacao="";

	$m = $op->select($tabela,$coluna,$condicao, $ordenacao);



	if($m!=null)
	{
		if(!empty($_POST))
		{
			$id=$m[0]["id"];
			$valores = array("senha"=>$_POST["senha"], "codigo_alteracao"=>"");
			$op->alterar($valores,"usuario", $id);
			echo"Senha alterada com sucesso.<br />";
			echo"<a href = 'form_login.php'>Clique aqui</a>para logar no sistema.";

		}
		else
		{
			$parametros["action"]="resetar_senha.php";
			$parametros["method"]="post";
			
			$f = new Form($parametros);
			
			$parametros=null;
			$parametros["type"]="password";
			$parametros["name"]="senha";
			$parametros["class"]="form-control password";
			$parametros["required"]="required";	
			/*$parametros["data_cript"]="sha1, md5";	*/
			$parametros["placeholder"]="Digite a senha...";
			$f->add_input($parametros);

			$parametros=null;
			$parametros["type"]="password";
			$parametros["name"]="confirmaSenha";
			$parametros["class"]="form-control password";
			$parametros["required"]="required";	
			/*$parametros["data_cript"]="sha1, md5";*/	
			$parametros["placeholder"]="Confirme a senha...";
			$f->add_input($parametros);

			$parametros=null;
			$parametros["type"]="hidden";
			$parametros["name"]="email";
			$parametros["value"]=$_GET["email"];
			$f->add_input($parametros);

			$parametros=null;
			$parametros["type"]="hidden";
			$parametros["name"]="codigo_alteracao";
			$parametros["value"]=$_GET["codigo_alteracao"];
			$f->add_input($parametros);
			

			$parametros=null;
			$parametros["logo"]="img/logo.jpg";
			$login = new Reseta($parametros,$f);

			$login->exibe();

		}
	}


    

?>



        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/validaform.min.js"></script>
    </body>
</html>