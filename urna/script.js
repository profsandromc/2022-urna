$( document ).ready(function() {

    function somConfirma() {
        var audio = new Audio('../assets/mp3/som-confirma.mp3');
        audio.play();
    }
    
    function somFim() {
        var audio = new Audio('../assets/mp3/som-fim.mp3');
        audio.play();
    }
    
    // botoes numericos
    const audio = new Audio("../assets/mp3/som-press.mp3");
    const buttons = document.querySelectorAll(".linha button");
    // percorre todos os botoes
    buttons.forEach(button => {
      button.addEventListener("click", () => {
        audio.play();
      });
    });

    // valida no backend as informacoes
    $("#btnConfirma").click(function(){
        $.ajax({
            url: "validacao.php",
            success: function(result){
                $("#tela").html(result);
            }
        });
    });
      
      
});