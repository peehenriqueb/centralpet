$(function(){

    function funcao_alterar(){
        
        nomeAdotante = $(this).closest("tr").children(".Adotante").html();
        nomeAnimal = $(this).closest("tr").children(".Animal").html();
        data = $(this).closest("tr").children(".Data").html();
        
      
        $("select[name=id_animal] option").each(function(){
            this.selected = $(this).html()==nomeAnimal;
        });
        $("select[name=id_adotante] option").each(function(){
            this.selected = $(this).html()==nomeAdotante;
        });
        $("input[name=data]").val(data);
        
    }


    $('.alterar').click(funcao_alterar);


})