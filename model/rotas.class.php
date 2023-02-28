<?php

Class Rotas {
    static function getPagina(){
        if (isset ($_GET['pag'])){
            $pagina = 'controller/' .$_GET['pag'] . '.php';
            if (file_exists($pagina)){
                include $pagina;
            }else{
                include 'erro.php';
        }

        }
    }
}