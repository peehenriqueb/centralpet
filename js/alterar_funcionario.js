$(function(){

    function funcao_alterar(){
        
        cpf = $(this).closest("tr").children(".CPF").text();
        nome = $(this).closest("tr").children(".Nome").text();
        telefone = $(this).closest("tr").children(".Telefone").html();
    
        
        $("input[name=id_funcionario]").val(cpf);
        $("input[name=nome]").val(nome);
        $("input[name=telefone]").val(telefone);
    

        
    
    }


    $('.edit').click(funcao_alterar);


})