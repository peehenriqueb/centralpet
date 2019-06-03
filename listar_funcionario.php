<?php

	
	include("classeCabecalho.php");

	$c->exibe_menu();


	include("form_funcionario.php");

	include("classeTabela.php");

	include("classeBancoDeDados.php");

	$tabela[]="funcionario";
	
	$coluna[]= "id_funcionario as CPF";
	$coluna[]= "nome as Nome";
	$coluna[]= "telefone as Telefone";
	
	$condicao = null;
	$ordenacao = "nome";

	$bd = new BancoDeDados($conexao);
	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);

	$t = new Tabela($m,"funcionario",true, true);
	
	$t->exibe();

?>


	<script src="js/alterar_funcionario.js"></script>
</body>
</html>

