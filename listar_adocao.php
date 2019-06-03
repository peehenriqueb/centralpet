<?php


	include("classeCabecalho.php");

	$c->exibe_menu();


	include("form_adocao.php");

	include("classeTabela.php");

	include("classeBancoDeDados.php");



	$tabela[]="view_adocao_adotante_animal";

	$bd = new BancoDeDados($conexao);
	
	$coluna[]= "id_adocao as ID";
	$coluna[]= "animal as Animal";
	$coluna[]= "adotante as Adotante";
	$coluna[]= "data as 'Data Adoção'";
	
	$condicao = null;
	$ordenacao = null;
	$m = $bd->select($tabela,$coluna,$condicao,$ordenacao);


	$t = new Tabela($m,"adocao",true, true);
	try{
		$t->exibe();
	}
	catch(Exception $e){
		$e->get_message();
	};

?>

	<script src="js/alterar_adocao.js"></script>
</body>
</html>