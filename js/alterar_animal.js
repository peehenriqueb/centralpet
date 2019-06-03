$(function(){

		function funcao_alterar(){
			
			nome = $(this).closest("tr").children(".Nome").text();
			raca = $(this).closest("tr").children(".Raça").text();
			peso = $(this).closest("tr").children(".Peso").html();
			sexo = $(this).closest("tr").children(".Sexo").html();
			idade = $(this).closest("tr").children(".Idade").html();
			especie = $(this).closest("tr").children(".Especie").html();
			foto = $(this).closest("tr").children(".Foto").html();
			
			$("input[name=nome]").val(nome);
			$("input[name=raca]").val(raca);
			$("input[name=peso]").val(peso);
			$("input[name=sexo]").val(sexo);
			$("input[name=idade]").val(idade);
			$("input[name=especie]").val(especie);
			$("input[file=foto_animal]").val(foto);

		

			
		
		}


		$('.edit').click(funcao_alterar);


})