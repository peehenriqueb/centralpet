$(function(){

    function funcao_alterar(){
        
        cpf = $(this).closest("tr").children(".CPF").text();
        nome = $(this).closest("tr").children(".Nome").text();
        telefone = $(this).closest("tr").children(".Telefone").html();
        endereco = $(this).closest("tr").children(".Endereço").html();
        especie_interesse = $(this).closest("tr").children(".Especie").html();
        idade_interesse = $(this).closest("tr").children(".Idade").html();
        
        $("input[name=id_adotante]").val(cpf);
        $("input[name=nome]").val(nome);
        $("input[name=telefone]").val(telefone);
        $("input[name=endereco]").val(endereco);
        $("input[name=especie_interesse]").val(especie_interesse);
        $("input[name=idade_interesse]").val(idade_interesse);

    

        
    
    }


    $('.alterar').click(funcao_alterar);


})