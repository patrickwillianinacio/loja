<?php

Class Rotas {

    public static $pag;
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';

    static function getSiteHome(){
        return Config::SITE_URL . '/' .Config::SITE_PASTA;
    }

    static function getSiteRaiz(){
        return $_SERVER['DOCUMENT_ROOT'] . '/' .Config::SITE_PASTA;
    }

    static function getSiteTema(){
        return self::getSiteHome() . '/' .self::$pasta_view;
    }

    static function pagCarrinho(){
        return self::getSiteHome() . '/carrinho';
    }

    static function getPagina(){
        if (isset ($_GET['pag'])){
            $pagina = $_GET['pag'];

            self::$pag = explode('/', $pagina);
            // echo'<pre>';
            // var_dump(self::$pag);
            // echo'<pre>';

            // $pagina = 'controller/' .$_GET['pag'] . '.php';
            $pagina = 'controller/' .self::$pag[0] . '.php';

            if (file_exists($pagina)){
                include $pagina;
            }else{
                include 'erro.php';
        }

        }
    }
}