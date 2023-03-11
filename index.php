<?php

require './lib/autoload.php';

$smarty = new Template();
Rotas::getPagina();

//valores para o template
$smarty->assign('NOME', 'PATRICK WILLIAN INACIO');
// $smarty->assign('GET_TEMA', Rotas::getSiteTema());

echo Rotas::pagCarrinho().'<br>';

$smarty -> display('index.tpl');

?>