// inicio do jquery
$(document).ready(function() {

    // consulta os dados
    function consultaDados(){
        const cargo = $('#cargo').val();
        const voto = $('#voto').val();
        $.ajax({
            type: "POST",
            url: 'validacao.php',
            data: 'cargo='+cargo+'&voto='+voto,
            dataType: 'html',
            success: function(result){
                // trocar de tela 
                $("#tela").html(result);
                // trocar
                if( tipoTela === 'presidente'){
                    somFim();
                }else{
                    somConfirma();
                }
            }
          });
    }

    // funcao do som de confirmar
    function somConfirma() {
        // variavel do som 
        var audio = new Audio('../assets/mp3/som-confirma.mp3');
        audio.play();
    }
    // funcao do som de fim da votacao 
    function somFim() {
        var audio = new Audio('../assets/mp3/som-fim.mp3');
        audio.play();
    }
    
    
    // botoes numericos
    const audio = new Audio("../assets/mp3/som-press.mp3");
    // registra todos os elementos buttons dentro da linha
    const buttons = document.querySelectorAll(".linha button");
    // percorre todos os botoes
    buttons.forEach(button => {
      button.addEventListener("click", () => {
        audio.play();
      });
    });


    // na execucao
    consultaDados();

    // valida no backend as informacoes
    $("#btnConfirma").click(function(){
        consultaDados();
    });
      
});