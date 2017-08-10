<?php
    /**
     * Created
     * With PhpStorm;
     * By User: shinishirotomonaga;
     * On Date: 04/08/2017;
     * At Time: 05:08;
     *
     * Project name:    Nederlandsche Financiële Reserve
     * File name:       ${FILENAME}
     *
     * All rights reserved on behalf of J.Klaassen.
     */

class Index extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        //echo Hash::create('sha256', 'jesse', HASH_PASSWORD_KEY);
        //echo Hash::create('sha256', 'test2', HASH_PASSWORD_KEY);
        $this->view->title = 'Home';
        $this->view->render('index/index');
    }

}