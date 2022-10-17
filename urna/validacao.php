<?php
// inicio da sessao
session_start();

// TELAS
$telas = array('depfederal', 'depestadual', 'senador', 'governador', 'presidente', 'fim', 'bloqueado');

// CANDIDATURA
$cargo = '';
if (isset($_REQUEST['cargo']) && !empty($_REQUEST['cargo'])) {
    $cargo = $_REQUEST['cargo'];
}

// VALIDA A EXISTENCIA DE UM ELEITOR
if (!isset($_SESSION['eleitor']) && empty($_SESSION['eleitor'])) {
    $_SESSION['eleitor'] = $_REQUEST['eleitor'];
}

// VOTO
$voto = '';
if (isset($_REQUEST['voto']) && !empty($_REQUEST['voto']) && is_numeric($_REQUEST['voto'])) {
    // captura voto
    $voto = $_REQUEST['voto'];
    $digitos = array('depfederal' => 5, 'depestadual' => 4, 'senador' => 3, 'governador' => 2, 'presidente' => 2);
    // tratamento conforme o cargo
    $voto = (strlen($voto) > $digitos[$cargo]) ? substr($voto, 0, $digitos[$cargo]) : $voto;
}




echo '<h1>Cargo</h1><pre>';
print_r($cargo);
echo '</pre>';
echo '<h1>Eleitor</h1><pre>';
print_r($_SESSION['eleitor']);
echo '</pre>';
echo '<h1>Voto</h1><pre>';
print_r($voto);
echo '</pre>';
exit();














// valida tipo de tela
if ($tipo == 'fim') {
    $proximaTela = 'bloqueio';
} else {
    // posicao atual da tela
    $posicao = array_search($tipo, $telas);
    // define a proxima tela
    $proximaTela = $telas[$posicao + 1];
}
switch ($proximaTela) {
    case 'depfederal':
        $html = '<h3>Dep. Federal</h3>
                <input type="text" id="cargo" value="depfederal">
                <input type="text" id="voto" value="">';
        break;
    case 'depestadual':
        $html = '<h3>Dep. Estadual</h3>
                <input type="text" id="cargo" value="depestadual">
                <input type="text" id="voto" value="">';
        break;
    case 'senador':
        $html = '<h3>Senador</h3>
                <input type="text" id="cargo" value="senador">
                <input type="text" id="voto" value="">';
        break;
    case 'governador':
        $html = '<h3>Governador</h3>
                <input type="text" id="cargo" value="governador">
                <input type="text" id="voto" value="">';
        break;
    case 'presidente':
        $html = '<h3>Presidente</h3>
                <input type="text" id="cargo" value="presidente">
                <input type="text" id="voto" value="">';
        break;
    case 'fim':
        $html = '<input type="text" id="cargo" value="fim">
                <h1 class="txtGrande">FIM</h1>';
        break;
    case 'bloqueio':
        $html = '<input type="text" id="cargo" value="bloqueado">
                <h1 class="txtGrande">BLOQUEADO</h1>';
        break;
    default:
        $html = '<input type="text" id="telaAtual" value="error">
                <h1 class="txtGrande">ERROR</h1>';
        break;
}

exit($html);