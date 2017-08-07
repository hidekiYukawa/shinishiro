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


    // todo: use an autoloader! (SPL Autoload or something...)
    
    // todo: use global (config miscellaneous) path vars, in case of redundant usage.
    
    require 'libs/Bootstrap.php';
    require 'libs/Controller.php';
    require 'libs/Model.php';
    require 'libs/View.php';

    // Library
    require 'libs/' . 'Database.php';
    require 'libs/' . 'Session.php';

    require 'config/paths.php';
    require 'config/database.php';
    
    $app = new Bootstrap();
?> 

