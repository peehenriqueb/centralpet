<?php


	include("classeCabecalho.php");

	$c->exibe_menu();


	include("form_animal.php");

	include("classeTabela.php");

	include("classeBancoDeDados.php");
	

	$tabela[]="animal";

	$bd = new BancoDeDados($conexao);
	
	$coluna[]= "id_animal as ID";
	$coluna[]= "animal.nome as Nome";
	$coluna[]= "raca as Raça";
	$coluna[]= "peso as Peso";
	$coluna[]= "sexo as Sexo";
	$coluna[]= "idade as Idade";
	$coluna[]= "especie as Especie";
	$coluna[]= "foto_animal as Foto";

	$condicao = null;
	$ordenacao = null;

	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);

	$t = new Tabela($m,"animal",true, true);
	
	$t->exibe();

?>

	<script src="js/alterar_animal.js"></script>
</body>
</html>