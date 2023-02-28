<?php

require './lib/autoload.php';

$smarty = new Template();
Rotas::getPagina();

//valores para o template
$smarty->assign('NOME', 'PATRICK WILLIAN INACIO');

$smarty -> display('index.tpl');

?>