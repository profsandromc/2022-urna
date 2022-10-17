<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urna</title>
    <link rel="stylesheet" href="./style.css?v=<?php echo date('YmdHis') . rand(0, 9999); ?>">
</head>

<body>
    <div id="urna">
        <div id="tela">
            <input type="text" id="telaAtual" value="bloqueio">
            <h1 class="txtGrande">BLOQUEADO</h1>
        </div>
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
                    <button id="btnConfirma">CONFIRMA</button>
                </div>
            </div>
        </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="script.js"></script>

</body>

</html>