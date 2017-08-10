<?php

/**
 * Created
 * With PhpStorm;
 * By User: shinishirotomonaga;
 * On Date: 04/08/2017;
 * At Time: 19:24;
 *
 * Project name:    Nederlandsche Financiële Reserve
 * File name:       ${FILENAME}
 *
 * All rights reserved on behalf of J.Klaassen.
 */
class Errror extends Controller {

    function __construct() {
        parent::__construct();
    }

    // fn.index() is to prevent constructor to interfere with default page
    function index() {

        $this->view->title = '404 Error';
        $this->view->msg = 'This page does not exist';

        $this->view->render('error/inc/header')
        // assign value to the view
        $this->view->msg = 'This page doesn\'t exist';

        $this->view->render('error/index');
    }
}

