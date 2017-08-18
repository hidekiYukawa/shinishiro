<?php
    /**
     * Created
     * With PhpStorm;
     * By User: shinishirotomonaga;
     * On Date: 04/08/2017;
     * At Time: 04:38;
     *
     * Project name:    Nederlandsche Financiële Reserve
     * File name:       ${FILENAME}
     *
     * All rights reserved on behalf of J.Klaassen.
     */


    // @todo: use an autoloader! (SPL Autoload or something...)
    
    // @todo:DONE? use global (config miscellaneous) path vars, in case of redundant usage. DONE?

    require 'config.php';
    require 'util/Auth.php';
    require 'util/Tools.php';

    # autoload classes
    function __autoload($class) {
        @require LIBS . $class . '.php';
    }
    
    # instantiate application object of class Bootstrap
    $bootstrap = new Bootstrap();

//    $bootstrap->init();
?> 
