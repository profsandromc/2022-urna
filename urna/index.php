<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urna</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <audio id="fim" controls>
            <source src="../assets/mp3/som-fim.mp3" type="audio/mpeg">
        </audio>
        <audio id="confirma" controls>
            <source src="../assets/mp3/som-confirma.mp3" type="audio/mpeg">
        </audio>
    </div>
    <div id="urna">
        <div id="tela"></div>
        <div id="aside">
            <div id="justica">
                <img src="../assets/img/logo-justica-eleitoral-senac.png">
                <p id="texto">Justiça Eleitoral</p>
            </div>
            <div id="teclado">
                <div class="linha">
                    <button>1</button>
                    <button>2</button>
                    <button>3</button>
                </div>
                <div class="linha">
                    <button>4</button>
                    <button>5</button>
                    <button>6</button>
                </div>
                <div class="linha">
                    <button>7</button>
                    <button>8</button>
                    <button>9</button>
                </div>
                <div class="linha">
                    <button>0</button>
                </div>
                <div class="linha-maior">
                    <button id="btnBranco">BRANCO</button>
                    <button id="btnCorrige" onclick="somConfirma();">CORRIGE</button>
                    <button id="btnConfirma" onclick="somFim();">CONFIRMA</button>
                </div>
            </div>
        </div>
    </div>
</body>


<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="script.js"></script>

</html>