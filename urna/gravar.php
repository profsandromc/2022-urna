<?php
// inicia a sessao
session_start();

// limpa a sessao
$_SESSION['urna'] = array();
session_destroy();

// constroi o voto
$_SESSION['urna'] = array(
    'votar' => TRUE,
    'eleitor' => '123456789',
    'votos' => array('12345', '1432', '442', '45', '12')
);

// dados
$voto = $_SESSION['urna'];
$data = array();

// adiciona novo elemento
array_push($data, $voto['eleitor'] . ';' . $voto['votos'][0] . ';' . $voto['votos'][1] . ';' . $voto['votos'][2] . ';' . $voto['votos'][3] . ';' . $voto['votos'][4]);

// nome do arquivo
$NumInternoUrna = '';
$zona = '';
$secao = '';

$nomeArquivo = sha1($voto['eleitor']) . date('YmdHis') . rand(0, 9999) . '.txt';

// grava registros
$fp = fopen('./votos/' . $nomeArquivo, 'w');
foreach ($data as $line) {
    $val = explode(";", base64_encode($line));
    fputcsv($fp, $val);
}
fclose($fp);